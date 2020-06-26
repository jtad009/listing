<?php

namespace Blog\Controller;

use Blog\Controller\AppController;
use Cake\Event\Event;
use Cake\Mailer\MailerAwareTrait;

/**
 * Users Controller
 *
 * @property \Blog\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{
    use MailerAwareTrait;
    public function isAuthorized()
    {
        return true;
    }

    public function beforeFilter(Event $event)
    {
        $this->Auth->allow(['add', 'forgot', 'reset']);
        return parent::beforeFilter($event);
    }
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }
    public function logout()
    {
        $this->Flash->success("You are now logged out");
        return $this->redirect($this->Auth->logout());
    }
    public function login()
    {
        $this->viewBuilder()->setLayout('login');
        if ($this->request->is('post')) {

            $user = $this->Users->find('all', ['conditions' => ['username' => $this->request->data['username']]])->hydrate(false)->toArray(); // identify the user
            $hash = new \Cake\Auth\DefaultPasswordHasher();

            if ($user) { //if a user with this creteria exist?
                if ($hash->check($this->request->data['password'], $user[0]['password'])) : //if password = hashedversion then user is valid
                    $user[0]['fullname'] = $user[0]['first_name'] . ' ' . $user[0]['last_name'];
                    $this->Auth->setUser($user[0]);;
                    $this->Flash->success("Login Success, Welcome " . $this->Auth->user('username'));
                    return $this->redirect(['action' => 'view', $user[0]['id']]);
                endif;
            }
            $this->Flash->error("Authentication error, you have supplied wrong credentials. Try Again or contact your admin.");
        }
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Articles'=>['sort'=>['Articles.created'=> 'DESC']], 'Articles.Categories']
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->setLayout('login');
        $user = $this->Users->newEntity();

        if ($this->request->is('post')) {
            $uploadError = array(1, 2, 3, 4, 5, 6, 7, 8); //errorcode gotten from php.net

            $upload = isset($this->request->data['image']) ?
                !in_array($this->request->data['image']['error'], $uploadError) ?
                $this->Upload->send($this->request->data['image'], 'author') : $user->image
                : '';

            $user = $this->Users->patchEntity($user, $this->request->data);
            $user->image = $upload;
            $user->article_count = 0;
            $user->public_key  =  base64_encode($user->username . ":" . $this->request->data['password']);
            $user->api_key  =  base64_encode($user->username . ":" . $this->request->data['password']);


            if ($this->Users->save($user)) {
                $this->Flash->success(__('The author information has been updated.'));

                return $this->redirect(['action' => 'view', $user->id]);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $uploadError = array(1, 2, 3, 4, 5, 6, 7, 8); //errorcode gotten from php.net

            $upload = isset($this->request->data['image']) ?
                !in_array($this->request->data['image']['error'], $uploadError) ?
                $this->Upload->send($this->request->data['image'], 'author') : $user->image
                : $user->image;
            if (strlen($this->request->data['password']) === 0) :
                unset($this->request->data['password']);
            endif;
            $user = $this->Users->patchEntity($user, $this->request->data);
            $user->image = $upload;

            $user->public_key  = isset($this->request->data['password']) && strlen($this->request->data['password']) > 0 ?
                base64_encode($user->username . ":" . $this->request->data['password'])
                : $this->request->data['ak'];

            $user->api_key  =  base64_encode($user->username . ":" . $this->request->data['password']);

            if ($this->Users->save($user)) {
                $this->Flash->success(__('The author information has been updated.'));

                return $this->redirect(['action' => 'view', $user->id]);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
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
     * Email user password reset Credentials
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function forgot()
    {
        $this->viewBuilder()->layout('login');
        if ($this->request->is('post')) {
            $data = \Cake\Datasource\ConnectionManager::get('blog')
                ->execute(
                    "SELECT users.id,first_name,last_name,email,username FROM  users 
             WHERE email = :mail or username = :mail",
                    ['mail' => $this->request->data['email']]
                )->fetch('assoc');
            if ($data) { //if user found then send reset email
                $this->getMailer('Diva')->send('blogForgot', [$data]);
                $this->Flash->success('Reset information has been Sent to ' . $data['email']);
            } else {
                $this->Flash->error('Sorry we did not find any record of this user in our system');
            }
        }
    }
    /**
     * Resets user password
     * @param string|null $id Reset ID sent in email
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function reset($id)
    {
        $this->viewBuilder()->layout('login');
        $user = $this->Users->get(base64_decode($id));
        if ($this->request->is(['patch', 'post', 'put'])) {
            if ($this->request->data('new_password') === $this->request->data('confirm_password')) {
                $user = $this->Users->patchEntity($user, $this->request->data);
                $user->password = $this->request->data('new_password');
                if ($this->Users->save($user)) {
                    $this->Flash->success(__('The user password has been saved.'));
                    return $this->redirect(['action' => 'login']);
                } else {
                    $this->Flash->error(__('The user password reset error. Please, try again.'));
                }
            } else {
                $this->Flash->error(__('Passwords do not match. Please, Try again'));
            }
        }
    }
}
