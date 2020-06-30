<?php

namespace Blog\Controller;

use Cake\Collection\Collection;
use Cake\Datasource\ConnectionManager;
use Blog\Controller\AppController;
use Cake\Event\Event;

/**
 * Articles Controller
 *
 * @property \Blog\Model\Table\ArticlesTable $Articles
 */
class ArticlesController extends AppController
{
    public function isAuthorized()
    {
        return true;
    }

    public function beforeFilter(Event $event)
    {
        $this->Auth->allow(['index', 'view', 'tags', 'category', 'comments', 'similar', 'ckUpload']);
        $this->viewBuilder()->layout('defaults');
        return parent::beforeFilter($event);
    }
    public function comments()
    {
        $this->viewBuilder()->layout = false;
        $this->autoRender = false;
        $uuid = \Cake\Utility\Text::uuid();
        \Cake\Datasource\ConnectionManager::get('blog')->execute("INSERT INTO comments (comment, article_id, name,id, created, modified) VALUES (?,?,?,?, now(), now())", [$_POST['comments'], $_POST['article'], $_POST['name'], $uuid]);
        echo json_encode(['status' => 'success']);
    }
    public function tags()
    {

        $tags = $this->request->params['pass'];
        // Use the BookmarksTable to find tagged bookmarks.
        $lifestyles = $this->Articles->find('tagged', [

            'tags' => $tags

        ]);
        $articles = $this->paginate($lifestyles);
        $c = $this->Articles->Categories->find('all');
        // Pass variables into the view template context.
        $this->set([
            'articles' => $articles,
            'tags' => $tags,
            'c' => $c
        ]);

        $this->set('_serialize', ['articles']);
    }
    public function category()
    {

        $tags = $this->request->params['pass'];
        // Use the BookmarksTable to find tagged bookmarks.
        $lifestyles = $this->Articles->find('category', [

            'tags' => $tags

        ]);
        $articles = $this->paginate($lifestyles);
        $c = $this->Articles->Categories->find('all');
        // Pass variables into the view template context.
        $this->set([
            'articles' => $articles,
            'tags' => $tags,
            'c' => $c
        ]);

        $this->set('_serialize', ['articles']);
    }
    public function numberofTimeTagisUsed($tag)
    {

        $db = \Cake\Datasource\ConnectionManager::get('blog');

        $places_of_interest = $db->execute("SELECT count(*) as c FROM `articles_tags` WHERE tag_id = ?", [$tag])->fetch('assoc');

        return $places_of_interest['c'];
    }
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->viewBuilder()->layout('blog');
        $this->paginate = [
            'contain' => ['Users', 'Comments', 'Categories', 'Tags'],
            'limit' => 9,
            'order' => ['Articles.created' => 'DESC'],
            'conditions' => ['published' => 1]
        ];
        $article = $this->Articles->find();


        $articles = $this->paginate($this->Articles);
        $c = $this->Articles->Categories->find('all');
        $response = [
            'code' => 200,
            'message' => 'List of articles on the blog',
            'data' => $articles->toArray(),
            'length' => $this->Articles->find('all')
                ->where(['published' => 1])->count()
        ];
        $page = 'Blog';
        $this->set(compact('response', 'c', 'articles', 'page'));
        $this->set('_serialize', ['response']);
    }

    /**
     * View method
     *
     * @param string|null $id Article id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($slug = null)
    {

        $this->viewBuilder()->layout('blog');
        $this->set('page', 'view');

        try {
            $id = 0;
            $h = $this->Articles->findBySlug($slug);
            foreach ($h as $r) {
                $id =  $r->id;
            } //search by slug, get the id and make the aactual search with that ID... we assume that the slug isnt array_unique(z)
            $article = $this->Articles->get($id, [
                'contain' => ['Categories', 'Users', 'Tags', 'Media']
            ]);


            $this->similar($article->category_id);
            
            // ;
            \Cake\Datasource\ConnectionManager::get('blog')
                ->execute('UPDATE articles SET view_count = view_count + 1 WHERE id = ?', [$id]);
            $response = [
                'code' => 200,
                'message' => 'View article via slug',
                'data' => $article
            ];
            $this->set('article', $article);
            $this->set('response', $response);
            $this->set('_serialize', ['response']);
        } catch (\Cake\Datasource\Exception\InvalidPrimaryKeyException  $e) {
            $this->Flash->error("Opps! Article was not found...");
            return $this->redirect(['action' => 'index']);
        } catch (\Cake\Error\FatalErrorException $e) {
            $this->Flash->error("Opps! Article was not found...");
            return $this->redirect(['action' => 'index']);
        } catch (\Cake\Datasource\Exception\RecordNotFoundException $e) {
            $this->Flash->error("Opps! Article was not found...");
            return $this->redirect(['action' => 'index']);
        }
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {

        $article = $this->Articles->newEntity();
        
        if ($this->request->is('post')) {
           
            $uploadError = array(1, 2, 3, 4, 5, 6, 7, 8); //errorcode gotten from php.net
            $upload = !in_array($this->request->data['cover_image']['error'], $uploadError) ? $this->Upload->send($this->request->data['cover_image'], 'blogs') : $article->cover_image;
            $article = $this->Articles->patchEntity($article, $this->request->getData());
            $article->slug = \Cake\Utility\Text::slug($this->request->data['title']);
            if (strlen($upload) > 0) {
                $article->cover_image = $upload;
            }
            $article->comment_count = 0;
            $article->view_count = 0;
            if ($this->Articles->save($article)) {
                $this->Flash->success(__('The article has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The article could not be saved. Please, try again.'));
        }
        $categories = $this->Articles->Categories->find('list', ['limit' => 200, 'keyField' => 'id', 'valueField' => 'category']);
        $users = $this->Articles->Users->find('list', ['limit' => 200, 'keyField' => 'id', 'valueField' => 'username'])->where(['id' => $this->Auth->user('id')]);
        $tags = $this->Articles->Tags->find('list', ['limit' => 200,  'keyField' => 'id', 'valueField' => 'tag']);

        $this->set(compact('article', 'categories', 'users', 'tags'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Article id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {

        $article = $this->Articles->get($id, [
            'contain' => ['Categories', 'Users', 'Tags', 'Comments' => ['conditions' => ['published' => 1], 'sort' => ['created' => 'DESC']]]
        ]);
        $this->loadModel('ArticlesTags');


        if ($this->request->is(['patch', 'post', 'put'])) {
            $uploadError = array(1, 2, 3, 4, 5, 6, 7, 8); //errorcode gotten from php.net
            $upload = !in_array($this->request->data['cover_image']['error'], $uploadError) ? $this->Upload->send($this->request->data['cover_image'], 'blogs') : $article->cover_image;
            $article = $this->Articles->patchEntity($article, $this->request->data);
            $article->slug = \Cake\Utility\Text::slug($this->request->data['title']);
            $article->article = $this->request->getData('editor');
            if (strlen($upload) > 0) {
                $article->cover_image = $upload;
            }


            if ($this->Articles->save($article)) {
                $this->Flash->success(__('The article has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The article could not be saved. Please, try again.'));
        }
        $categories = $this->Articles->Categories->find('list', ['limit' => 200, 'keyField' => 'id', 'valueField' => 'category']);
        $users = $this->Articles->Users->find('list', ['limit' => 200, 'keyField' => 'id', 'valueField' => 'username'])->where(['id' => $this->Auth->user('id')]);
        $tags = $this->Articles->Tags->find('list', ['limit' => 200,  'keyField' => 'id', 'valueField' => 'tag']);
        $this->set(compact('article', 'categories', 'users', 'tags'));
        // $this->set('_serialize', ['article']);
    }

    /**
     * Find tags that the user has deleted and then deleted them from the database
     */
    public function getTagIdsAndDelete($article_id, $tags)
    {
        $tag = $this->Articles->Tags->find()->select(['Tags.id'])->where(['tag IN ' => $tags])->hydrate(false)->toArray();
        $ids = $this->SkoleUtil->flatten($tag);
        foreach ($ids as $id) :
            ConnectionManager::get('blog')
                ->execute(
                    "DELETE FROM articles_tags where article_id = ? and tag_id = ? ",
                    [$article_id, $id]
                );
        endforeach;
    }

    /**
     * Delete method
     *
     * @param string|null $id Article id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        if ($this->request->is('json')) :
            $this->request->allowMethod(['post', 'delete']);
            $article = $this->Articles->get($id);
            if ($this->Articles->delete($article)) {
                $response =  $response = [
                    'code' => 200,
                    'message' => 'The article was deleted',
                ];
                $this->set(compact('response'));
                $this->set('_serialize', ['response']);
            } else {
                $response =  $response = [
                    'code' => 400,
                    'message' => 'Error, The article was not deleted',
                ];
                $this->set(compact('response'));
                $this->set('_serialize', ['response']);
            } else :
            $this->request->allowMethod(['post', 'delete']);
            $article = $this->Articles->get($id);
            if ($this->Articles->delete($article)) {
                $this->Flash->success(__('The article has been deleted.'));
            } else {
                $this->Flash->error(__('The article could not be deleted. Please, try again.'));
            }

            return $this->redirect(['action' => 'index']);
        endif;
    }

    /**
     * Get articles similar to the one we are currently viewing
     */
    public function similar($category_id)
    {
        $this->loadModel('Blog.ArticlesTags');

        $similar = $this->Articles->find()->select([
            'id',
            'category_id', 'title', 'slug', 'user_id', 'created', 'article', 'cover_image'
        ])->where(['category_id' => $category_id])->limit(3);
        $this->set('similar', $similar);
        $this->set('_serialize', ['similar']);
    }
/**
 * Upload Images from the Editor plugin
 */
    public function upload(){
       
        $this->viewBuilder()->setLayout(false);
        $this->autoRender = false;
        $image  = $this->Upload->send($this->request->getData('upload'), 'article_content');
        // $CKEditorFuncNum = $_GET['CKEditorFuncNum']; 
        $url = BASE_DOMAIN.'img/passport/blogs/'. $image; 
        $msg = $url  .' successfully uploaded'; 
        // $re = '<script>window.parent.CKEDITOR.tools.callFunction("1", '.$url.', "");</script>'; 
        // @header('Content-type: text/html; charset=utf-8'); 
        $this->response->withHeader('Content-type','text/html; charset=utf-8');
        // $this->response->
        echo   json_encode(['uploaded'=>1, 'fileName'=>$image, 'url'=>$url]);
        exit();
    }
}
