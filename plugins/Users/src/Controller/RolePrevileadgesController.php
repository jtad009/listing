<?php
namespace Users\Controller;

use Users\Controller\AppController;

/**
 * RolePrevileadges Controller
 *
 * @property \Users\Model\Table\RolePrevileadgesTable $RolePrevileadges
 *
 * @method \Users\Model\Entity\RolePrevileadge[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RolePrevileadgesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Previleadges', 'Roles'],
        ];
        $rolePrevileadges = $this->paginate($this->RolePrevileadges);

        $this->set(compact('rolePrevileadges'));
    }

    /**
     * View method
     *
     * @param string|null $id Role Previleadge id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $rolePrevileadge = $this->RolePrevileadges->get($id, [
            'contain' => ['Previleadges', 'Roles'],
        ]);

        $this->set('rolePrevileadge', $rolePrevileadge);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $rolePrevileadge = $this->RolePrevileadges->newEntity();
        if ($this->request->is('post')) {
            $rolePrevileadge = $this->RolePrevileadges->patchEntity($rolePrevileadge, $this->request->getData());
            if ($this->RolePrevileadges->save($rolePrevileadge)) {
                $this->Flash->success(__('The role previleadge has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The role previleadge could not be saved. Please, try again.'));
        }
        $previleadges = $this->RolePrevileadges->Previleadges->find('list', ['limit' => 200]);
        $roles = $this->RolePrevileadges->Roles->find('list', ['limit' => 200]);
        $this->set(compact('rolePrevileadge', 'previleadges', 'roles'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Role Previleadge id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $rolePrevileadge = $this->RolePrevileadges->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rolePrevileadge = $this->RolePrevileadges->patchEntity($rolePrevileadge, $this->request->getData());
            if ($this->RolePrevileadges->save($rolePrevileadge)) {
                $this->Flash->success(__('The role previleadge has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The role previleadge could not be saved. Please, try again.'));
        }
        $previleadges = $this->RolePrevileadges->Previleadges->find('list', ['limit' => 200]);
        $roles = $this->RolePrevileadges->Roles->find('list', ['limit' => 200]);
        $this->set(compact('rolePrevileadge', 'previleadges', 'roles'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Role Previleadge id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $rolePrevileadge = $this->RolePrevileadges->get($id);
        if ($this->RolePrevileadges->delete($rolePrevileadge)) {
            $this->Flash->success(__('The role previleadge has been deleted.'));
        } else {
            $this->Flash->error(__('The role previleadge could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
