<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CompanyDetails Controller
 *
 * @property \App\Model\Table\CompanyDetailsTable $CompanyDetails
 */
class CompanyDetailsController extends AppController
{

    /**
     * initialize method
     *  ID : CA-01
     * 
     */
    public function initialize()
    {
        parent::initialize();
        $nav_selected = ["system_settings"];
        $this->set('nav_selected', $nav_selected);

        // Allow full access to this controller
        //$this->Auth->allow();
    }

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $companyDetails = $this->CompanyDetails->get(1);
        $this->set(['companyDetails' => $companyDetails]);        
    }

    /**
     * View method
     *
     * @param string|null $id Company Detail id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $companyDetail = $this->CompanyDetails->get($id, [
            'contain' => []
        ]);
        $this->set('companyDetail', $companyDetail);
        $this->set('_serialize', ['companyDetail']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $companyDetail = $this->CompanyDetails->newEntity();
        if ($this->request->is('post')) {
            $companyDetail = $this->CompanyDetails->patchEntity($companyDetail, $this->request->data);
            if ($this->CompanyDetails->save($companyDetail)) {
                $this->Flash->success(__('The company detail has been saved.'));
                $action = $this->request->data['save'];
                if( $action == 'save' ){
                    return $this->redirect(['action' => 'index']);
                }else{
                    return $this->redirect(['action' => 'add']);
                }                    
            } else {
                $this->Flash->error(__('The company detail could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('companyDetail'));
        $this->set('_serialize', ['companyDetail']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Company Detail id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $companyDetail = $this->CompanyDetails->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $companyDetail = $this->CompanyDetails->patchEntity($companyDetail, $this->request->data);
            if ($this->CompanyDetails->save($companyDetail)) {
                $this->Flash->success(__('The company detail has been saved.'));
                $action = $this->request->data['save'];
                if( $action == 'save' ){
                    return $this->redirect(['action' => 'index']);
                }else{
                    return $this->redirect(['action' => 'edit', $id]);
                }         
            } else {
                $this->Flash->error(__('The company detail could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('companyDetail'));
        $this->set('_serialize', ['companyDetail']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Company Detail id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $companyDetail = $this->CompanyDetails->get($id);
        if ($this->CompanyDetails->delete($companyDetail)) {
            $this->Flash->success(__('The company detail has been deleted.'));
        } else {
            $this->Flash->error(__('The company detail could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
