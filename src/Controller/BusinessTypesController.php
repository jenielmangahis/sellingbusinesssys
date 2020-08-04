<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * BusinessTypes Controller
 *
 * @property \App\Model\Table\BusinessTypesTable $BusinessTypes
 */
class BusinessTypesController extends AppController
{
    /**
     * initialize method
     *  ID : PB-01
     * 
     */
    public function initialize()
    {
        parent::initialize();
        $nav_selected = ["system_settings"];
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
        $this->set('businessTypes', $this->paginate($this->BusinessTypes));
        $this->set('_serialize', ['businessTypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Business Type id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $businessType = $this->BusinessTypes->get($id, [
            'contain' => ['Business']
        ]);
        $this->set('businessType', $businessType);
        $this->set('_serialize', ['businessType']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $businessType = $this->BusinessTypes->newEntity();
        if ($this->request->is('post')) {
            $businessType = $this->BusinessTypes->patchEntity($businessType, $this->request->data);
            if ($this->BusinessTypes->save($businessType)) {
                $this->Flash->success(__('The business type has been saved.'));
                $action = $this->request->data['save'];
                if( $action == 'save' ){
                    return $this->redirect(['action' => 'index']);
                }else{
                    return $this->redirect(['action' => 'add']);
                }                    
            } else {
                $this->Flash->error(__('The business type could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('businessType'));
        $this->set('_serialize', ['businessType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Business Type id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $businessType = $this->BusinessTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $businessType = $this->BusinessTypes->patchEntity($businessType, $this->request->data);
            if ($this->BusinessTypes->save($businessType)) {
                $this->Flash->success(__('The business type has been saved.'));
                $action = $this->request->data['save'];
                if( $action == 'save' ){
                    return $this->redirect(['action' => 'index']);
                }else{
                    return $this->redirect(['action' => 'edit', $id]);
                }         
            } else {
                $this->Flash->error(__('The business type could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('businessType'));
        $this->set('_serialize', ['businessType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Business Type id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $businessType = $this->BusinessTypes->get($id);
        if ($this->BusinessTypes->delete($businessType)) {
            $this->Flash->success(__('The business type has been deleted.'));
        } else {
            $this->Flash->error(__('The business type could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
