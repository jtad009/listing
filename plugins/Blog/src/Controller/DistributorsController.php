<?php
namespace Blog\Controller;

use Blog\Controller\AppController;
use Cake\Mailer\MailerAwareTrait;

/**
 * Distributors Controller
 *
 * @property \Blog\Model\Table\DistributorsTable $Distributors
 *
 * @method \Blog\Model\Entity\Distributor[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DistributorsController extends AppController
{
    use MailerAwareTrait;
    public function isAuthorized()
    {
        return true;
    }
    
    public function beforeFilter(\Cake\Event\Event $event)
    {
        $this->Auth->allow([ 'add']);
        return parent::beforeFilter($event);
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            //'contain' => ['Users', 'Comments', 'Categories', 'Tags'],
            //'limit' => 10,
            'order' => ['Distributor.created' => 'DESC'],
            //'conditions' => ['published' => 1]
        ];
        $distributors = $this->paginate($this->Distributors);

        $this->set(compact('distributors'));
    }

    /**
     * View method
     *
     * @param string|null $id Distributor id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $distributor = $this->Distributors->get($id, [
            'contain' => [],
        ]);

        $this->set('distributor', $distributor);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->setlayout('default');
        $distributor = $this->Distributors->newEntity();
        if ($this->request->is('post')) {
            $distributor = $this->Distributors->patchEntity($distributor, $this->request->getData());
            
            if ($this->Distributors->save($distributor)) {
                $this->getMailer('Diva')->send('distributor', [$distributor]);
                $this->Flash->success(__('The distributor has been saved.'));

                return $this->redirect(['controller'=>'/','action' => 'apply-as-distributor', 'plugin'=>false]);
            }
            $this->Flash->error(__('The distributor could not be saved. Please, try again.'));
        }

        $states = \Cake\Datasource\ConnectionManager::get('blog')->execute("SELECT states FROM states")->fetchAll();
        $this->set('page', 'distributor');
   
        $this->set(compact('distributor', 'states'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Distributor id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $distributor = $this->Distributors->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $distributor = $this->Distributors->patchEntity($distributor, $this->request->getData());
            if ($this->Distributors->save($distributor)) {
                $this->Flash->success(__('The distributor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The distributor could not be saved. Please, try again.'));
        }
        $states = \Cake\Datasource\ConnectionManager::get('blog')->execute("SELECT states FROM states")->fetchAll();
        $this->set(compact('distributor', 'states'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Distributor id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $distributor = $this->Distributors->get($id);
        if ($this->Distributors->delete($distributor)) {
            $this->Flash->success(__('The distributor has been deleted.'));
        } else {
            $this->Flash->error(__('The distributor could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
