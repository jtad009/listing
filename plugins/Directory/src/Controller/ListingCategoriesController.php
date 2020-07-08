<?php
namespace Directory\Controller;

use Directory\Controller\AppController;

/**
 * ListingCategories Controller
 *
 * @property \Directory\Model\Table\ListingCategoriesTable $ListingCategories
 *
 * @method \Directory\Model\Entity\ListingCategory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ListingCategoriesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Listings', 'Categories'],
        ];
        $listingCategories = $this->paginate($this->ListingCategories);

        $this->set(compact('listingCategories'));
    }

    /**
     * View method
     *
     * @param string|null $id Listing Category id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $listingCategory = $this->ListingCategories->get($id, [
            'contain' => ['Listings', 'Categories'],
        ]);

        $this->set('listingCategory', $listingCategory);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $listingCategory = $this->ListingCategories->newEntity();
        if ($this->request->is('post')) {
            $listingCategory = $this->ListingCategories->patchEntity($listingCategory, $this->request->getData());
            if ($this->ListingCategories->save($listingCategory)) {
                $this->Flash->success(__('The listing category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The listing category could not be saved. Please, try again.'));
        }
        $listings = $this->ListingCategories->Listings->find('list', ['limit' => 200]);
        $categories = $this->ListingCategories->Categories->find('list', ['limit' => 200]);
        $this->set(compact('listingCategory', 'listings', 'categories'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Listing Category id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $listingCategory = $this->ListingCategories->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $listingCategory = $this->ListingCategories->patchEntity($listingCategory, $this->request->getData());
            if ($this->ListingCategories->save($listingCategory)) {
                $this->Flash->success(__('The listing category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The listing category could not be saved. Please, try again.'));
        }
        $listings = $this->ListingCategories->Listings->find('list', ['limit' => 200]);
        $categories = $this->ListingCategories->Categories->find('list', ['limit' => 200]);
        $this->set(compact('listingCategory', 'listings', 'categories'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Listing Category id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $listingCategory = $this->ListingCategories->get($id);
        if ($this->ListingCategories->delete($listingCategory)) {
            $this->Flash->success(__('The listing category has been deleted.'));
        } else {
            $this->Flash->error(__('The listing category could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
