<?php
namespace Blog\Controller;

use Blog\Controller\AppController;
use Cake\Datasource\ConnectionManager;

/**
 * Subscriptions Controller
 *
 * @property \Blog\Model\Table\SubscriptionsTable $Subscriptions
 *
 * @method \Blog\Model\Entity\Subscription[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SubscriptionsController extends AppController
{
    public function isAuthorized()
    {
        return true;
    }

    public function beforeFilter(\Cake\Event\Event $event)
    {
        $this->Auth->allow(['add']);
        parent::beforeFilter($event);
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $subscriptions = $this->paginate($this->Subscriptions);

        $this->set(compact('subscriptions'));
    }

    /**
     * View method
     *
     * @param string|null $id Subscription id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $subscription = $this->Subscriptions->get($id, [
            'contain' => [],
        ]);

        $this->set('subscription', $subscription);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        if( $this->request->is('ajax') ) {
            $this->autoRender = false;
            $this->viewBuilder()->setLayout(false);
        }
        $subscription = $this->Subscriptions->newEntity();
        if ($this->request->is('post')) {
            $subscription = $this->Subscriptions->patchEntity($subscription, $this->request->getData());
           
            if ($this->Subscriptions->save($subscription)) {
                $data = $this->MailChimp->addContact($subscription->email);
                
                if( !is_null($data['email_address']) ){
                    ConnectionManager::get('blog')->execute("UPDATE subscriptions SET email_id = ? where email = ?", [$data['id'], $data['email_address']]);
                }
                if( $this->request->is('ajax') ) {
                    echo json_encode(['code' => 200, 'message' => $subscription->email]);
                    exit();
                } else {
                    $this->Flash->success(__('The subscription has been saved.'));
                    return $this->redirect(['action' => 'index']);
            
                }
            }
            if( $this->request->is('ajax') ) {
                // debug();   
                echo json_encode(['code' => 404, 'message' => array_keys($subscription->errors())[0].' already exist.']);
                exit();
            }
            $this->Flash->error(__('The subscription could not be saved. Please, try again.'));
        }
        $this->set(compact('subscription'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Subscription id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $subscription = $this->Subscriptions->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $subscription = $this->Subscriptions->patchEntity($subscription, $this->request->getData());
            if ($this->Subscriptions->save($subscription)) {
                $data = $this->MailChimp->updateContact($subscription->email_id, $subscription->email);
                $this->Flash->success(__('The subscription has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The subscription could not be saved. Please, try again.'));
        }
        $this->set(compact('subscription'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Subscription id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $subscription = $this->Subscriptions->get($id);
        if ($this->Subscriptions->delete($subscription)) {
            $this->Flash->success(__('The subscription has been deleted.'));
        } else {
            $this->Flash->error(__('The subscription could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
