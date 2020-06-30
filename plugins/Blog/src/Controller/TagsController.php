<?php
namespace Blog\Controller;

use Blog\Controller\AppController;
use Cake\Event\Event;
/**
 * Tags Controller
 *
 * @property \Blog\Model\Table\TagsTable $Tags
 */
class TagsController extends AppController
{
public function beforeFilter(Event $event) {
        $this->Auth->allow(['view']);
        $this->viewBuilder()->layout('defaults');
        return parent::beforeFilter($event);
    }
    public function isAuthorized()
    {
        return true;
    }
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $tags = $this->paginate($this->Tags);
        
        array_map(function($tag){
            return $tag['count'] = $this->numberofTimeTagisUsed($tag->id);
        },$tags->toArray());
        $response = [
            'code'=>200,
            'message'=>'List of Categories on the blog',
            'data'=>$tags->toArray(),
            'length' => $tags->count()
        ];
        $this->set(compact('tags','response'));
        $this->set('_serialize', ['response']);
    }

    /**
     * Find the number of times a tag was used
     * to paint the UI for tags if need be
     */
    public function numberofTimeTagisUsed($tag)
    {

        $db = \Cake\Datasource\ConnectionManager::get('blog');

        $places_of_interest = $db->execute("SELECT count(*) as c FROM `articles_tags` WHERE tag_id = ?", [$tag])->fetch('assoc');

        return $places_of_interest['c'];
    }
    /**
     * View method
     *
     * @param string|null $id Tag id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tag = $this->Tags->get($id, [
            'contain' => ['Articles','Articles.Categories', 'Articles.Users']
        ]);
        $c = $this->Tags->Articles->Categories->find('all');
        $response = [
            'code'=>200,
            'message'=>'List of articles on the blog filtered by Tags',
            'data'=>$tag->toArray(),
            // 'length' => $tag->count()
        ];
         $this->set(compact('tag','c','response'));
        $this->set('_serialize', ['response']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tag = $this->Tags->newEntity();
        
        if ($this->request->is('post')) {
            $tag = $this->Tags->patchEntity($tag, $this->request->data);
            if ($this->Tags->save($tag)) {
                if($this->request->is('json')):
                    $response = [
                        'code'=>200,
                        'message'=>'New Tag added to Tags',
                        'data'=>$tag,
                        // 'length' => $tag->count()
                    ];
                    $this->set(compact('response'));
                    $this->set('_serialize', ['response']);
                else:
                    $this->Flash->success(__('The tag has been saved.'));

                    return $this->redirect(['action' => 'index']);
                endif;
            }
            $this->Flash->error(__('The tag could not be saved. Please, try again.'));
        }
        $articles = $this->Tags->Articles->find('list', ['limit' => 200])->where(['user_id'=>$this->Auth->user('id')]);
        $this->set(compact('tag', 'articles'));
        $this->set('_serialize', ['response']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tag id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tag = $this->Tags->get($id, [
            'contain' => ['Articles']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tag = $this->Tags->patchEntity($tag, $this->request->data);
            if ($this->Tags->save($tag)) {
                $this->Flash->success(__('The tag has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tag could not be saved. Please, try again.'));
        }
         $articles = $this->Tags->Articles->find('list', ['limit' => 200])->where(['user_id'=>$this->Auth->user('id')]);
        $this->set(compact('tag', 'articles'));
        $this->set('_serialize', ['tag']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tag id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tag = $this->Tags->get($id);
        if ($this->Tags->delete($tag)) {
            $this->Flash->success(__('The tag has been deleted.'));
        } else {
            $this->Flash->error(__('The tag could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    /**
     * Find and tags similar to the one provided 
     * @param string|null $tags tags to locate
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function findTags($tags){
        $tag = $this->Tags->find()->where(['tag LIKE' => $tags.'%'])->toArray();
        $response = [
            'code'=>200,
            'message'=>'List of filtered Tags',
            'data'=>$tag,
            'queryString'=>$tags
            // 'length' => $tag->count()
        ];
        $this->set(compact('response'));
        $this->set('_serialize', ['response']);
        
    }
}
