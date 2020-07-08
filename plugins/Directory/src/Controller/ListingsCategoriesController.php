<?php
namespace Directory\Controller;

use Directory\Controller\AppController;

/**
 * ListingsCategories Controller
 *
 * @property \Directory\Model\Table\ListingsCategoriesTable $ListingsCategories
 *
 * @method \Directory\Model\Entity\ListingsCategory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ListingsCategoriesController extends AppController
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
        $listingsCategories = $this->paginate($this->ListingsCategories);

        $this->set(compact('listingsCategories'));
    }

    /**
     * View method
     *
     * @param string|null $id Listings Category id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $listingsCategory = $this->ListingsCategories->get($id, [
            'contain' => ['Listings', 'Categories'],
        ]);

        $this->set('listingsCategory', $listingsCategory);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $listingsCategory = $this->ListingsCategories->newEntity();
        if ($this->request->is('post')) {
            $listingsCategory = $this->ListingsCategories->patchEntity($listingsCategory, $this->request->getData());
            if ($this->ListingsCategories->save($listingsCategory)) {
                $this->Flash->success(__('The listings category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The listings category could not be saved. Please, try again.'));
        }
        $listings = $this->ListingsCategories->Listings->find('list', ['limit' => 200]);
        $categories = $this->ListingsCategories->Categories->find('list', ['limit' => 200]);
        $this->set(compact('listingsCategory', 'listings', 'categories'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Listings Category id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $listingsCategory = $this->ListingsCategories->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $listingsCategory = $this->ListingsCategories->patchEntity($listingsCategory, $this->request->getData());
            if ($this->ListingsCategories->save($listingsCategory)) {
                $this->Flash->success(__('The listings category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The listings category could not be saved. Please, try again.'));
        }
        $listings = $this->ListingsCategories->Listings->find('list', ['limit' => 200]);
        $categories = $this->ListingsCategories->Categories->find('list', ['limit' => 200]);
        $this->set(compact('listingsCategory', 'listings', 'categories'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Listings Category id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $listingsCategory = $this->ListingsCategories->get($id);
        if ($this->ListingsCategories->delete($listingsCategory)) {
            $this->Flash->success(__('The listings category has been deleted.'));
        } else {
            $this->Flash->error(__('The listings category could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
