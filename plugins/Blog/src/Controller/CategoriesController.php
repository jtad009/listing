<?php
namespace Blog\Controller;

use Blog\Controller\AppController;
use Cake\Event\Event;
/**
 * Categories Controller
 *
 * @property \Blog\Model\Table\CategoriesTable $Categories
 */
class CategoriesController extends AppController
{
public function beforeFilter(Event $event) {
        $this->Auth->allow(['view']);
        $this->viewBuilder()->layout('defaults');
        return parent::beforeFilter($event);
    }
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $categories = $this->paginate($this->Categories);
        $response = [
            'code'=>200,
            'message'=>'List of Categories on the blog',
            'data'=>$categories->toArray(),
            'length' => $categories->count()
        ];
        $this->set(compact('categories', 'c', 'response'));
        $this->set('_serialize', ['response']);
    }

    /**
     * View method
     *
     * @param string|null $id Category id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $category = $this->Categories->get($id, [
            'contain' => [
                'Articles'=>['sort'=>[
                    'Articles.created' => 'desc'
                    ]],
             'Articles.Users',
             'Articles.Categories'
            ]
            
        ]);
   
        $c = $this->Categories->find('all');
        $response = [
            'code'=>200,
            'message'=>'List of articles on the blog filtered by Categories',
            'data'=>$category->toArray(),
            // 'length' => $tag->count()
        ];
        $this->set(compact('category', 'c', 'response'));
        $this->set('_serialize', ['response']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $category = $this->Categories->newEntity();
        if ($this->request->is('post')) {
            $category = $this->Categories->patchEntity($category, $this->request->data);
            $category->article_count = 0;
            if ($this->Categories->save($category)) {
                $this->Flash->success(__('The category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The category could not be saved. Please, try again.'));
        }
        $this->set(compact('category'));
        $this->set('_serialize', ['category']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Category id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $category = $this->Categories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $category = $this->Categories->patchEntity($category, $this->request->data);
            $category->article_count = $category->article_count == 0 ? 0 : $category->article_count;
            if ($this->Categories->save($category)) {
                $this->Flash->success(__('The category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The category could not be saved. Please, try again.'));
        }
        $this->set(compact('category'));
        $this->set('_serialize', ['category']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Category id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $category = $this->Categories->get($id);
        if ($this->Categories->delete($category)) {
            $this->Flash->success(__('The category has been deleted.'));
        } else {
            $this->Flash->error(__('The category could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
