<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Agents Controller
 *
 * @property \App\Model\Table\AgentsTable $Agents
 */
class AgentsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $this->set('agents', $this->paginate($this->Agents));
        $this->set('_serialize', ['agents']);
    }

    /**
     * View method
     *
     * @param string|null $id Agent id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $agent = $this->Agents->get($id, [
            'contain' => ['Users']
        ]);
        $this->set('agent', $agent);
        $this->set('_serialize', ['agent']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $agent = $this->Agents->newEntity();
        if ($this->request->is('post')) {
            $agent = $this->Agents->patchEntity($agent, $this->request->data);
            if ($this->Agents->save($agent)) {
                $this->Flash->success(__('The agent has been saved.'));
                $action = $this->request->data['save'];
                if( $action == 'save' ){
                    return $this->redirect(['action' => 'index']);
                }else{
                    return $this->redirect(['action' => 'add']);
                }                    
            } else {
                $this->Flash->error(__('The agent could not be saved. Please, try again.'));
            }
        }
        $users = $this->Agents->Users->find('list', ['limit' => 200]);
        $this->set(compact('agent', 'users'));
        $this->set('_serialize', ['agent']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Agent id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $agent = $this->Agents->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $agent = $this->Agents->patchEntity($agent, $this->request->data);
            if ($this->Agents->save($agent)) {
                $this->Flash->success(__('The agent has been saved.'));
                $action = $this->request->data['save'];
                if( $action == 'save' ){
                    return $this->redirect(['action' => 'index']);
                }else{
                    return $this->redirect(['action' => 'edit', $id]);
                }         
            } else {
                $this->Flash->error(__('The agent could not be saved. Please, try again.'));
            }
        }
        $users = $this->Agents->Users->find('list', ['limit' => 200]);
        $this->set(compact('agent', 'users'));
        $this->set('_serialize', ['agent']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Agent id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $agent = $this->Agents->get($id);
        if ($this->Agents->delete($agent)) {
            $this->Flash->success(__('The agent has been deleted.'));
        } else {
            $this->Flash->error(__('The agent could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
