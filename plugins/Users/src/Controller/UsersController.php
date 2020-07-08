<?php

namespace Users\Controller;

use Users\Controller\AppController;

/**
 * Users Controller
 *
 * @property \Users\Model\Table\UsersTable $Users
 *
 * @method \Users\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Roles', 'Roles.RolePrevileadges', 'Roles.RolePrevileadges.Previleadges']
        ];
        $users = $this->paginate($this->Users);
        $page = 'users';
        $this->set(compact('users', 'page'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Roles', 'Roles.RolePrevileadges', 'Roles.RolePrevileadges.Previleadges'],
        ]);
        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    /**
     * Logout Route
     */
    public function logout()
    {
        $this->Flash->success("You are now logged out");
        return $this->redirect($this->Auth->logout());
    }
    /**
     * Login Action
     */
    public function login()
    {
        $this->viewBuilder()->setLayout('login');
        if ($this->request->is('post')) {

            $user = $this->Users->find('all', ['conditions' => ['username' => $this->request->data['username']]])->contain(['Roles', 'Roles.RolePrevileadges', 'Roles.RolePrevileadges.Previleadges'])->hydrate(false)->toArray(); // identify the user
            $hash = new \Cake\Auth\DefaultPasswordHasher();

            if ($user) { //if a user with this creteria exist?
                if ($hash->check($this->request->data['password'], $user[0]['password'])) : //if password = hashedversion then user is valid
                    $user[0]['fullname'] = $user[0]['first_name'] . ' ' . $user[0]['last_name'];
                    $user[0]['rights'] = $this->filterPrevileadges($user[0]);
                    $this->Auth->setUser($user[0]);
                    $this->Flash->success("Login Success, Welcome " . $this->Auth->user('username'));
                    return $this->redirect(['action' => 'view', $user[0]['id']]);
                endif;
            }
            $this->Flash->error("Authentication error, you have supplied wrong credentials. Try Again or contact your admin.");
        }
    }

    /**
     * Extract all user previleadges
     * @param array $user 
     * @return array
     */
    public function filterPrevileadges($user){
       
        $getPrevileadges = array_map(function($previleadge){
            return $previleadge['previleadge'];
        },$user['role']['role_previleadges']);
        
        $previleadgeList = array_map(function($previleadge){
           
            return $previleadge['previleadges'];
        }, $getPrevileadges);
        return $previleadgeList;
    }
}
