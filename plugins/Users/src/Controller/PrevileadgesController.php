<?php
namespace Users\Controller;

use Users\Controller\AppController;

/**
 * Previleadges Controller
 *
 * @property \Users\Model\Table\PrevileadgesTable $Previleadges
 *
 * @method \Users\Model\Entity\Previleadge[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PrevileadgesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $previleadges = $this->paginate($this->Previleadges);

        $this->set(compact('previleadges'));
    }

    /**
     * View method
     *
     * @param string|null $id Previleadge id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $previleadge = $this->Previleadges->get($id, [
            'contain' => ['RolePrevileadges'],
        ]);

        $this->set('previleadge', $previleadge);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $previleadge = $this->Previleadges->newEntity();
        if ($this->request->is('post')) {
            $previleadge = $this->Previleadges->patchEntity($previleadge, $this->request->getData());
            if ($this->Previleadges->save($previleadge)) {
                $this->Flash->success(__('The previleadge has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The previleadge could not be saved. Please, try again.'));
        }
        $this->set(compact('previleadge'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Previleadge id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $previleadge = $this->Previleadges->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $previleadge = $this->Previleadges->patchEntity($previleadge, $this->request->getData());
            if ($this->Previleadges->save($previleadge)) {
                $this->Flash->success(__('The previleadge has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The previleadge could not be saved. Please, try again.'));
        }
        $this->set(compact('previleadge'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Previleadge id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $previleadge = $this->Previleadges->get($id);
        if ($this->Previleadges->delete($previleadge)) {
            $this->Flash->success(__('The previleadge has been deleted.'));
        } else {
            $this->Flash->error(__('The previleadge could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
