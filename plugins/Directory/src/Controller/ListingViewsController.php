<?php
namespace Directory\Controller;

use Directory\Controller\AppController;

/**
 * ListingViews Controller
 *
 * @property \Directory\Model\Table\ListingViewsTable $ListingViews
 *
 * @method \Directory\Model\Entity\ListingView[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ListingViewsController extends AppController
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
        $listingViews = $this->paginate($this->ListingViews);

        $this->set(compact('listingViews'));
    }

    /**
     * View method
     *
     * @param string|null $id Listing View id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $listingView = $this->ListingViews->get($id, [
            'contain' => ['Listings'],
        ]);

        $this->set('listingView', $listingView);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $listingView = $this->ListingViews->newEntity();
        if ($this->request->is('post')) {
            $listingView = $this->ListingViews->patchEntity($listingView, $this->request->getData());
            if ($this->ListingViews->save($listingView)) {
                $this->Flash->success(__('The listing view has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The listing view could not be saved. Please, try again.'));
        }
        $listings = $this->ListingViews->Listings->find('list', ['limit' => 200]);
        $this->set(compact('listingView', 'listings'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Listing View id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $listingView = $this->ListingViews->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $listingView = $this->ListingViews->patchEntity($listingView, $this->request->getData());
            if ($this->ListingViews->save($listingView)) {
                $this->Flash->success(__('The listing view has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The listing view could not be saved. Please, try again.'));
        }
        $listings = $this->ListingViews->Listings->find('list', ['limit' => 200]);
        $this->set(compact('listingView', 'listings'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Listing View id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $listingView = $this->ListingViews->get($id);
        if ($this->ListingViews->delete($listingView)) {
            $this->Flash->success(__('The listing view has been deleted.'));
        } else {
            $this->Flash->error(__('The listing view could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
