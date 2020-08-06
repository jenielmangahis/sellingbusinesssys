<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Business Controller
 *
 * @property \App\Model\Table\BusinessTable $Business
 */
class BusinessController extends AppController
{
    /**
     * initialize method
     *  ID : PB-01
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
            }
        } 
    }

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'BusinessTypes', 'SalesAuthorities']
        ];
        $this->set('business', $this->paginate($this->Business));
        $this->set('_serialize', ['business']);
    }

    /**
     * View method
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
}
