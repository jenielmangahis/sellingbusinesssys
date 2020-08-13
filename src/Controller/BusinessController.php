<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Business Controller
 *
 * @property \App\Model\Table\BusinessTable $Business
 */
class BusinessController extends AppController
{
    public $helpers  = ['NavigationSelector'];
    public $paginate = ['maxLimit' => 10, 'order' => ['Business.id' => 'DESC']];

    /**
     * initialize method
     *  ID : BUSS-01
     * 
     */
    public function initialize()
    {
        parent::initialize();
        $nav_selected = ["business"];
        $this->set('nav_selected', $nav_selected);

        $session = $this->request->session();    
        $this->user_data = $session->read('User.data');  
        
        if( isset($this->user_data) ){
            if( $this->user_data->group_id == 1 ){ //Admin
                $this->Auth->allow();
            }else{
                $this->Auth->allow(['user_index', 'user_add', 'user_edit', 'user_delete']);
            }
        } 
    }

    /**
     * beforeFilter method
     *  ID : BUSS-02
     * 
     */
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);

        $session = $this->request->session();    
        $this->user_data = $session->read('User.data');  
        
        if( isset($this->user_data) ){
            if( $this->user_data->group_id == 1 ){ //Admin             
                $this->Auth->allow();
            }
        }
    }

    /**
     * Index method
     *  ID : BUSS-03
     *
     * @return void
     */
    public function index()
    {
        $search_query = '';
        $search_field = '';

        if( isset($this->request->data['search_query']) ){
            $search_query = trim($this->request->data['search_query']);
            $search_field = trim($this->request->data['search_field']);

            $business = $this->Business->find('all')
                ->contain(['Users', 'BusinessTypes', 'SalesAuthorities'])
                ->where([
                    'OR' => [
                        $search_field . ' LIKE' => '%' . $search_query . '%'
                    ]
                ])                
            ;
        }else{            
            $business = $this->Business->find('all')
                ->contain(['Users', 'BusinessTypes', 'SalesAuthorities'])
            ;            
        }

        $this->set(['search_query' => $search_query, 'search_field' => $search_field]);
        $this->set('business', $this->paginate($business));
        $this->set('_serialize', ['business']);
    }

    /**
     * View method
     *  ID : BUSS-04
     *
     * @param string|null $id Busines id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $busines = $this->Business->get($id, [
            'contain' => ['Users', 'BusinessTypes', 'SalesAuthorities']
        ]);
        $this->set('busines', $busines);
        $this->set('_serialize', ['busines']);
    }

    /**
     * Add method
     *  ID : BUSS-05
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $busines = $this->Business->newEntity();
        if ($this->request->is('post')) {
            $newBusines = $this->Business->patchEntity($busines, $this->request->data);
            if ($this->Business->save($busines)) {
                $newBusines->cover_photo = $this->Business->uploadCoverPhoto($newBusines, $this->request->data['cover_photo']);

                $this->Flash->success(__('The busines has been saved.'));
                $action = $this->request->data['save'];
                if( $action == 'save' ){
                    return $this->redirect(['action' => 'index']);
                }else{
                    return $this->redirect(['action' => 'add']);
                }                    
            } else {
                $this->Flash->error(__('The busines could not be saved. Please, try again.'));
            }
        }
        $users = $this->Business->Users->find('list', ['limit' => 200]);
        $businessTypes      = $this->Business->BusinessTypes->find('list', ['limit' => 200]);
        $businessCategories = $this->Business->BusinessCategories->find('list', ['limit' => 200]);
        $salesAuthorities   = $this->Business->SalesAuthorities->find('list', ['limit' => 200]);
        $this->set(compact('busines', 'users', 'businessTypes', 'salesAuthorities', 'businessCategories'));
        $this->set('_serialize', ['busines']);
    }

    /**
     * Edit method
     *  ID : BUSS-06
     *
     * @param string|null $id Busines id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $busines = $this->Business->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            if( $this->request->data['upload_cover_photo']['name'] != '' ){
                $this->request->data['cover_photo'] = $this->Business->uploadCoverPhoto($busines, $this->request->data['upload_cover_photo']);
            }
            $busines = $this->Business->patchEntity($busines, $this->request->data);
            if ($this->Business->save($busines)) {
                $this->Flash->success(__('The busines has been saved.'));
                $action = $this->request->data['save'];
                if( $action == 'save' ){
                    return $this->redirect(['action' => 'index']);
                }else{
                    return $this->redirect(['action' => 'edit', $id]);
                }         
            } else {
                $this->Flash->error(__('The busines could not be saved. Please, try again.'));
            }
        }
        $users = $this->Business->Users->find('list', ['limit' => 200]);
        $businessTypes = $this->Business->BusinessTypes->find('list', ['limit' => 200]);
        $salesAuthorities = $this->Business->SalesAuthorities->find('list', ['limit' => 200]);
        $this->set(compact('busines', 'users', 'businessTypes', 'salesAuthorities'));
        $this->set('_serialize', ['busines']);
    }

    /**
     * Delete method
     *  ID : BUSS-07
     *
     * @param string|null $id Busines id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $busines = $this->Business->get($id);
        if ($this->Business->delete($busines)) {
            $this->Flash->success(__('The busines has been deleted.'));
        } else {
            $this->Flash->error(__('The busines could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    /**
     * User Index method
     *  ID : BUSS-08
     *
     * @return void
     */
    public function user_index()
    {
        $search_query = '';
        $search_field = '';

        if( isset($this->request->data['search_query']) ){
            $search_query = trim($this->request->data['search_query']);
            $search_field = trim($this->request->data['search_field']);

            $business = $this->Business->find('all')
                ->contain(['Users', 'BusinessTypes', 'SalesAuthorities'])
                ->where(['Business.user_id' => $this->user_data->id])
                ->andWhere([
                    'OR' => [
                        $search_field . ' LIKE' => '%' . $search_query . '%'
                    ]
                ])                
            ;
        }else{            
            $business = $this->Business->find('all')
                ->contain(['Users', 'BusinessTypes', 'SalesAuthorities'])
                ->where(['Business.user_id' => $this->user_data->id])
            ;            
        }

        $this->set(['search_query' => $search_query, 'search_field' => $search_field]);
        $this->set('business', $this->paginate($business));
        $this->set('_serialize', ['agents']);
    }

    /**
     * User Add method
     *  ID : BUSS-09
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function user_add()
    {
        $busines = $this->Business->newEntity();
        if ($this->request->is('post')) {
            $this->request->data['user_id'] = $this->user_data->id;
            $newBusines = $this->Business->patchEntity($busines, $this->request->data);
            if ($this->Business->save($busines)) {
                $newBusines->cover_photo = $this->Business->uploadCoverPhoto($newBusines, $this->request->data['cover_photo']);

                $this->Flash->success(__('The busines has been saved.'));
                $action = $this->request->data['save'];
                if( $action == 'save' ){
                    return $this->redirect(['controller' => 'my_business', 'action' => 'index']);
                }else{
                    return $this->redirect(['controller' => 'my_business', 'action' => 'add']);
                }                    
            } else {
                $this->Flash->error(__('The busines could not be saved. Please, try again.'));
            }
        }

        $businessTypes      = $this->Business->BusinessTypes->find('list', ['limit' => 200]);
        $businessCategories = $this->Business->BusinessCategories->find('list', ['limit' => 200]);
        $salesAuthorities   = $this->Business->SalesAuthorities->find('list', ['limit' => 200]);

        $this->set(compact('busines', 'users', 'businessTypes', 'salesAuthorities', 'businessCategories'));
        $this->set('_serialize', ['busines']);
    }

    /**
     * User Edit method
     *  ID : BUSS-10
     *
     * @param string|null $id Busines id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function user_edit($id = null)
    {
        $busines = $this->Business->get($id, [
            'contain' => []
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            if( $this->request->data['upload_cover_photo']['name'] != '' ){
                $this->request->data['cover_photo'] = $this->Business->uploadCoverPhoto($busines, $this->request->data['upload_cover_photo']);
            }
            $busines = $this->Business->patchEntity($busines, $this->request->data);
            if ($this->Business->save($busines)) {
                $this->Flash->success(__('The busines has been saved.'));
                $action = $this->request->data['save'];
                if( $action == 'save' ){
                    return $this->redirect(['controller' => 'my_business', 'action' => 'index']);
                }else{
                    return $this->redirect(['controller' => 'my_business', 'action' => 'edit', $id]);
                }         
            } else {
                $this->Flash->error(__('The busines could not be saved. Please, try again.'));
            }
        }

        $businessTypes = $this->Business->BusinessTypes->find('list', ['limit' => 200]);
        $salesAuthorities = $this->Business->SalesAuthorities->find('list', ['limit' => 200]);
        $this->set(compact('busines', 'users', 'businessTypes', 'salesAuthorities'));
        $this->set('_serialize', ['busines']);
    }

    /**
     * User Delete method
     *  ID : BUSS-11
     *
     * @param string|null $id Busines id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function user_delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $busines = $this->Business->find()
            ->where(['Business.id' => $id, 'Business.user_id' => $this->user_data->id])
            ->first()
        ;

        if( $busines ){
            if ($this->Business->delete($busines)) {
                $this->Flash->success(__('The busines has been deleted.'));
            } else {
                $this->Flash->error(__('The busines could not be deleted. Please, try again.'));
            }
        }else{
            $this->Flash->error(__('Cannot find data'));
        }
        
        return $this->redirect(['controller' => 'my_business', 'action' => 'index']);
    }
}
