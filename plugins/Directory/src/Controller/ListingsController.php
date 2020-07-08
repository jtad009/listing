<?php
namespace Directory\Controller;

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
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['States', 'ListingImages', 'ListingViews'=>function (\Cake\ORM\Query $query) {
                return $query->select(['views'=>'sum(views)', 'id', 'listing_id'])->group(['ListingViews.listing_id']);
            }, 'ListingReviews'=>function (\Cake\ORM\Query $query) {
                return $query->select(['rating'=>'sum(rating)/count(rating)', 'id', 'listing_id'])->group(['ListingReviews.listing_id']);
            }],
        ];
        $listings = $this->paginate($this->Listings);

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
            'contain' => ['States', 'ListingImages', 'ListingViews'=>function (\Cake\ORM\Query $query) {
                return $query->select(['views'=>'sum(views)', 'id', 'listing_id'])->group(['ListingViews.listing_id']);
            }, 'ListingReviews'=>function (\Cake\ORM\Query $query) {
                return $query->select(['rating'=>'sum(rating)/count(rating)', 'id', 'listing_id'])->group(['ListingReviews.listing_id']);
            }],
        ]);

        $this->set('listing', $listing);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $listing = $this->Listings->newEntity();
        if ($this->request->is('post')) {
            $listing = $this->Listings->patchEntity($listing, $this->request->getData());
            if ($this->Listings->save($listing)) {
                $this->Flash->success(__('The listing has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The listing could not be saved. Please, try again.'));
        }
        $states = $this->Listings->States->find('list', ['limit' => 200]);
        $this->set(compact('listing', 'states'));
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
        if ($this->request->is(['patch', 'post', 'put'])) {
            $listing = $this->Listings->patchEntity($listing, $this->request->getData());
            if ($this->Listings->save($listing)) {
                $this->Flash->success(__('The listing has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The listing could not be saved. Please, try again.'));
        }
        $states = $this->Listings->States->find('list', ['limit' => 200]);
        $this->set(compact('listing', 'states'));
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
        $this->request->allowMethod(['post', 'delete']);
        $listing = $this->Listings->get($id);
        if ($this->Listings->delete($listing)) {
            $this->Flash->success(__('The listing has been deleted.'));
        } else {
            $this->Flash->error(__('The listing could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
