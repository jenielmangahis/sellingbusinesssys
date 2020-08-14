<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * BusinessCategories Controller
 *
 * @property \App\Model\Table\BusinessCategoriesTable $BusinessCategories
 */
class BusinessCategoriesController extends AppController
{
    /**
     * initialize method
     *  ID : BC-01
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
     *  ID : BC-02
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
     *
     * @return void
     */
    public function index()
    {
        $this->set('businessCategories', $this->paginate($this->BusinessCategories));
        $this->set('_serialize', ['businessCategories']);
    }

    /**
     * View method
     *
     * @param string|null $id Business Category id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $businessCategory = $this->BusinessCategories->get($id, [
            'contain' => ['Business']
        ]);
        $this->set('businessCategory', $businessCategory);
        $this->set('_serialize', ['businessCategory']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $businessCategory = $this->BusinessCategories->newEntity();
        if ($this->request->is('post')) {
            $businessCategory = $this->BusinessCategories->patchEntity($businessCategory, $this->request->data);
            if ($this->BusinessCategories->save($businessCategory)) {
                $this->Flash->success(__('The business category has been saved.'));
                $action = $this->request->data['save'];
                if( $action == 'save' ){
                    return $this->redirect(['action' => 'index']);
                }else{
                    return $this->redirect(['action' => 'add']);
                }                    
            } else {
                $this->Flash->error(__('The business category could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('businessCategory'));
        $this->set('_serialize', ['businessCategory']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Business Category id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $businessCategory = $this->BusinessCategories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $businessCategory = $this->BusinessCategories->patchEntity($businessCategory, $this->request->data);
            if ($this->BusinessCategories->save($businessCategory)) {
                $this->Flash->success(__('The business category has been saved.'));
                $action = $this->request->data['save'];
                if( $action == 'save' ){
                    return $this->redirect(['action' => 'index']);
                }else{
                    return $this->redirect(['action' => 'edit', $id]);
                }         
            } else {
                $this->Flash->error(__('The business category could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('businessCategory'));
        $this->set('_serialize', ['businessCategory']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Business Category id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $businessCategory = $this->BusinessCategories->get($id);
        if ($this->BusinessCategories->delete($businessCategory)) {
            $this->Flash->success(__('The business category has been deleted.'));
        } else {
            $this->Flash->error(__('The business category could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
