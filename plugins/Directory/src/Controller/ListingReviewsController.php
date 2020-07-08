<?php
namespace Directory\Controller;

use Directory\Controller\AppController;

/**
 * ListingReviews Controller
 *
 * @property \Directory\Model\Table\ListingReviewsTable $ListingReviews
 *
 * @method \Directory\Model\Entity\ListingReview[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ListingReviewsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Listings'],
        ];
        $listingReviews = $this->paginate($this->ListingReviews);

        $this->set(compact('listingReviews'));
    }

    /**
     * View method
     *
     * @param string|null $id Listing Review id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $listingReview = $this->ListingReviews->get($id, [
            'contain' => ['Listings'],
        ]);

        $this->set('listingReview', $listingReview);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $listingReview = $this->ListingReviews->newEntity();
        if ($this->request->is('post')) {
            $listingReview = $this->ListingReviews->patchEntity($listingReview, $this->request->getData());
            if ($this->ListingReviews->save($listingReview)) {
                $this->Flash->success(__('The listing review has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The listing review could not be saved. Please, try again.'));
        }
        $listings = $this->ListingReviews->Listings->find('list', ['limit' => 200]);
        $this->set(compact('listingReview', 'listings'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Listing Review id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $listingReview = $this->ListingReviews->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $listingReview = $this->ListingReviews->patchEntity($listingReview, $this->request->getData());
            if ($this->ListingReviews->save($listingReview)) {
                $this->Flash->success(__('The listing review has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The listing review could not be saved. Please, try again.'));
        }
        $listings = $this->ListingReviews->Listings->find('list', ['limit' => 200]);
        $this->set(compact('listingReview', 'listings'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Listing Review id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $listingReview = $this->ListingReviews->get($id);
        if ($this->ListingReviews->delete($listingReview)) {
            $this->Flash->success(__('The listing review has been deleted.'));
        } else {
            $this->Flash->error(__('The listing review could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
