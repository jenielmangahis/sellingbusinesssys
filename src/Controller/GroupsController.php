<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Groups Controller
 *
 * @property \App\Model\Table\GroupsTable $Groups
 */
class GroupsController extends AppController
{
    /**
     * initialize method
     *  ID : GRP-01
     * 
     */
    public function initialize()
    {
        parent::initialize();
        $nav_selected = ["system_settings"];
        $this->set('nav_selected', $nav_selected);

    }

    /**
     * beforeFilter method
     *  ID : GRP-02
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
     * ID : GRP-03
     *
     * @return void
     */
    public function index()
    {
        if( isset($this->request->query['query']) ){
            $query  = $this->request->query['query'];
            $groups = $this->Groups->find('all')
                ->where(['Groups.name LIKE' => '%' . $query . '%'])                                
            ;
        }else{
            $groups = $this->Groups->find('all');
        }      
        
        $this->set('groups', $this->paginate($groups));
        $this->set('_serialize', ['groups']);
    }

    /**
     * View method
     * ID : GRP-04
     *
     * @param string|null $id Group id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $group = $this->Groups->get($id, [
            'contain' => ['Users']
        ]);
        $this->set('group', $group);
        $this->set('_serialize', ['group']);
    }

    /**
     * Add method
     * ID : GRP-05
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $group = $this->Groups->newEntity();
        if ($this->request->is('post')) {
            $group = $this->Groups->patchEntity($group, $this->request->data);
            if ($this->Groups->save($group)) {
                $this->Flash->success(__('The group has been saved.'));
                $action = $this->request->data['save'];
                if( $action == 'save' ){
                    return $this->redirect(['action' => 'index']);
                }else{
                    return $this->redirect(['action' => 'add']);
                }  
            } else {
                $this->Flash->error(__('The group could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('group'));
        $this->set('_serialize', ['group']);
    }

    /**
     * Edit method
     * ID : GRP-06
     *
     * @param string|null $id Group id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $group = $this->Groups->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $group = $this->Groups->patchEntity($group, $this->request->data);
            if ($this->Groups->save($group)) {
                $this->Flash->success(__('The group has been saved.'));
                $action = $this->request->data['save'];
                if( $action == 'save' ){
                    return $this->redirect(['action' => 'index']);
                }else{
                    return $this->redirect(['action' => 'edit', $id]);
                } 
            } else {
                $this->Flash->error(__('The group could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('group'));        
        $this->set('_serialize', ['group']);
    }

    /**
     * Delete method
     * ID : GRP-07
     *
     * @param string|null $id Group id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $group = $this->Groups->get($id);
        if ($this->Groups->delete($group)) {
            $this->Flash->success(__('The group has been deleted.'));
        } else {
            $this->Flash->error(__('The group could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
