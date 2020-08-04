<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SalesAuthorities Controller
 *
 * @property \App\Model\Table\SalesAuthoritiesTable $SalesAuthorities
 */
class SalesAuthoritiesController extends AppController
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
        $this->set('salesAuthorities', $this->paginate($this->SalesAuthorities));
        $this->set('_serialize', ['salesAuthorities']);
    }

    /**
     * View method
     *
     * @param string|null $id Sales Authority id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $salesAuthority = $this->SalesAuthorities->get($id, [
            'contain' => ['Business']
        ]);
        $this->set('salesAuthority', $salesAuthority);
        $this->set('_serialize', ['salesAuthority']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $salesAuthority = $this->SalesAuthorities->newEntity();
        if ($this->request->is('post')) {
            $salesAuthority = $this->SalesAuthorities->patchEntity($salesAuthority, $this->request->data);
            if ($this->SalesAuthorities->save($salesAuthority)) {
                $this->Flash->success(__('The sales authority has been saved.'));
                $action = $this->request->data['save'];
                if( $action == 'save' ){
                    return $this->redirect(['action' => 'index']);
                }else{
                    return $this->redirect(['action' => 'add']);
                }                    
            } else {
                $this->Flash->error(__('The sales authority could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('salesAuthority'));
        $this->set('_serialize', ['salesAuthority']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Sales Authority id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $salesAuthority = $this->SalesAuthorities->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $salesAuthority = $this->SalesAuthorities->patchEntity($salesAuthority, $this->request->data);
            if ($this->SalesAuthorities->save($salesAuthority)) {
                $this->Flash->success(__('The sales authority has been saved.'));
                $action = $this->request->data['save'];
                if( $action == 'save' ){
                    return $this->redirect(['action' => 'index']);
                }else{
                    return $this->redirect(['action' => 'edit', $id]);
                }         
            } else {
                $this->Flash->error(__('The sales authority could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('salesAuthority'));
        $this->set('_serialize', ['salesAuthority']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Sales Authority id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $salesAuthority = $this->SalesAuthorities->get($id);
        if ($this->SalesAuthorities->delete($salesAuthority)) {
            $this->Flash->success(__('The sales authority has been deleted.'));
        } else {
            $this->Flash->error(__('The sales authority could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
