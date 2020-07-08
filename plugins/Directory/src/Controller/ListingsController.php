<?php

namespace Directory\Controller;

use Cake\Auth\DefaultPasswordHasher;
use Cake\Datasource\ConnectionManager;
use Directory\Controller\AppController;

/**
 * Listings Controller
 *
 * @property \Directory\Model\Table\ListingsTable $Listings
 *
 * @method \Directory\Model\Entity\Listing[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ListingsController extends AppController
{
    public function beforeFilter(\Cake\Event\Event $event)
    {
        $this->Auth->allow(['index', 'search']);
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $list = $this->Listings->find('all', ['contain' => ['Categories', 'States', 'ListingImages', 'ListingViews' => function (\Cake\ORM\Query $query) {
            return $query->select(['views' => 'sum(views)', 'id', 'listing_id'])->group(['ListingViews.listing_id']);
        }, 'ListingReviews' => function (\Cake\ORM\Query $query) {
            return $query->select(['rating' => 'sum(rating)/count(rating)', 'id', 'listing_id'])
                ->group(['ListingReviews.listing_id'])
                ->order(['sum(rating)/count(rating)' => 'DESC']);
        }],])->toArray();

        //sort the listing based on ratings
        usort($list, function ($a, $b) {
            if(empty($a['listing_reviews']) || empty($b['listing_reviews'])):
                return -1;
            else:
                return ($a['listing_reviews'][0]->rating >= $b['listing_reviews'][0]->rating) ? -1 : 1;
            endif;
           
        });
        $listings = ($list);

        $this->set(compact('listings'));
    }

    /**
     * View method
     *
     * @param string|null $id Listing id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $listing = $this->Listings->get($id, [
            'contain' => ['Categories', 'States', 'ListingImages', 'ListingViews' => function (\Cake\ORM\Query $query) {
                return $query->select(['views' => 'sum(views)', 'id', 'listing_id'])->group(['ListingViews.listing_id']);
            }, 'ListingReviews' => function (\Cake\ORM\Query $query) {
                return $query->select(['rating' => 'sum(rating)/count(rating)', 'id', 'listing_id'])->group(['ListingReviews.listing_id']);
            }],
        ]);
        $categories = array_map(function ($category) {
            return $category['category'];
        }, $listing->toArray()['categories']);

        $this->set('listing', $listing);
        $this->set('categories', implode(',', $categories));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        if (!$this->isAuthorized($this->Auth->user(), 'CREATE_LISTING')) :
            throw new \Exception("UnAuthorized User", 401);
        endif;
        $listing = $this->Listings->newEntity();
        if ($this->request->is('post')) {
           
            $listing = $this->Listings->patchEntity($listing, $this->request->getData());
            if ($this->Listings->save($listing)) {
                $this->Flash->success(__('The listing has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The listing could not be saved. Please, try again.'));
        }
        $states = $this->Listings->States->find('list', ['limit' => 200, 'keyField' => 'id', 'valueField' => 'states']);
        $categories = $this->Listings->Categories->find('list', ['limit' => 200, 'keyField' => 'id', 'valueField' => 'category']);
        $this->set(compact('listing', 'states', 'categories'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Listing id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {

        $listing = $this->Listings->get($id, [
            'contain' => [],
        ]);
        if (!$this->isAuthorized($this->Auth->user(), 'EDIT_LISTING')) :
            throw new \Exception("UnAuthorized User", 401);
        endif;
        //if listing is published and user is admin, show error admin can only edit unpublished listings
        if ($listing->published && $this->Auth->user('role.role') === 'ADMIN') :
            throw new \Exception("UnAuthorized User", 401);
        endif;
        if ($this->request->is(['patch', 'post', 'put'])) {
            $listing = $this->Listings->patchEntity($listing, $this->request->getData());
            if ($this->Listings->save($listing)) {
                $this->Flash->success(__('The listing has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The listing could not be saved. Please, try again.'));
        }
        $states = $this->Listings->States->find('list', ['limit' => 200, 'keyField' => 'id', 'valueField' => 'states']);
        $categories = $this->Listings->Categories->find('list', ['limit' => 200, 'keyField' => 'id', 'valueField' => 'category']);
        $this->set(compact('listing', 'states', 'categories'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Listing id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        if ($this->Auth->user('role.role') != 'SUPER_ADMIN') :
            throw new \Exception("UnAuthorized User", 401);
        endif;
        $this->request->allowMethod(['post', 'delete']);
        $listing = $this->Listings->get($id);
        if ($this->Listings->delete($listing)) {
            $this->Flash->success(__('The listing has been deleted.'));
        } else {
            $this->Flash->error(__('The listing could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    /**
     * Publish or unpublish a listing
     * @return void
     * @throws \Exception 
     */
    public function publish()
    {
        $this->autoRender = false;
        $this->viewBuilder()->setLayout(false);
        if (!$this->isAuthorized($this->Auth->user(), 'APPROVE_LISTING')) :
            if ($this->request->is('ajax')) :
                echo json_encode(['code' => 401, 'message' => 'Unauthorized to perform this action']);
                exit;
            else :
                throw new \Exception("UnAuthorized User", 401);
            endif;

        endif;
        $id =  $this->request->getData('id');
        $publish = $this->request->getData('published');
        ConnectionManager::get('default')->execute("UPDATE listings SET published = :published where id = :id", ['published' => $publish, 'id' => $id]);
        echo json_encode(['code' => 200, 'message' => 'Updated', 'data' => $publish]);
        exit();
    }

    /**
     * Approve or dis-Approve a listing
     * @return void
     * @throws \Exception 
     */
    public function approve()
    {
        $this->autoRender = false;
        $this->viewBuilder()->setLayout(false);
        if (!$this->isAuthorized($this->Auth->user(), 'APPROVE_LISTING')) :
            if ($this->request->is('ajax')) :
                echo json_encode(['code' => 401, 'message' => 'Unauthorized to perform this action']);
                exit;
            else :
                throw new \Exception("UnAuthorized User", 401);
            endif;

        endif;

        $id =  $this->request->getData('id');
        $approve = $this->request->getData('approved');
        ConnectionManager::get('default')->execute("UPDATE listings SET approved = :approve where id = :id", ['approve' => $approve, 'id' => $id]);
        echo json_encode(['code' => 200, 'message' => 'Updated', 'data' => $approve]);
        exit();
    }
/**
 * Search for listing
 */
    public function search(){
        $this->autoRender = false;
        $this->viewBuilder()->setLayout(false);
        $data = $this->Listings->find('listing', ['param'=>$this->request->getData('param')])->toArray();
        echo json_encode(['code'=>200,'message'=>'Results' ,'data'=>$data]);
        exit();
    }
}
