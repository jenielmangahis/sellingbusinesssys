<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Slides Controller
 *
 * @property \App\Model\Table\SlidesTable $Slides
 */
class SlidesController extends AppController
{

    /**
     * initialize method
     *  ID : CA-01
     * 
     */
    public function initialize()
    {
        parent::initialize();
        $nav_selected = ["slides"];
        $this->set('nav_selected', $nav_selected);

        // Allow full access to this controller
        //$this->Auth->allow();
    }

    /**
     * Index method
     *  ID : CA-02
     *
     * @return void
     */
    public function index()
    {
        $slides = $this->Slides->find('all')
            ->order(['Slides.sorting' => 'ASC'])
        ;
        $this->set(['enable_fancy_box' => true]);
        $this->set('slides', $this->paginate($slides));
        $this->set('_serialize', ['slides']);
    }

    /**
     * View method
     *  ID : CA-03
     *
     * @param string|null $id Slide id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $slide = $this->Slides->get($id, [
            'contain' => []
        ]);
        $this->set('slide', $slide);
        $this->set('_serialize', ['slide']);
    }

    /**
     * Add method
     *  ID : CA-04
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $slide = $this->Slides->newEntity();
        if ($this->request->is('post')) {
            //Get most recent slide
            $recent_slide = $this->Slides->find()
                ->order(['Slides.sorting' => 'DESC'])
                ->first()
            ;
            if( $recent_slide ){
                $sort_order = $recent_slide->sorting + 1;
            }else{
                $sort_order = 1;
            }
            $this->request->data['sorting'] = $sort_order;
            $slide = $this->Slides->patchEntity($slide, $this->request->data);
            if ($this->Slides->save($slide)) {               
                $this->Flash->success(__('The slide has been saved.'));
                $action = $this->request->data['save'];
                if( $action == 'save' ){
                    return $this->redirect(['action' => 'index']);
                }else{
                    return $this->redirect(['action' => 'add']);
                }                    
            } else {
                $this->Flash->error(__('The slide could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('slide'));
        $this->set('_serialize', ['slide']);
    }

    /**
     * Edit method
     *  ID : CA-05
     *
     * @param string|null $id Slide id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $slide = $this->Slides->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $slide = $this->Slides->patchEntity($slide, $this->request->data);
            if ($this->Slides->save($slide)) {
                $this->Flash->success(__('The slide has been saved.'));
                $action = $this->request->data['save'];
                if( $action == 'save' ){
                    return $this->redirect(['action' => 'index']);
                }else{
                    return $this->redirect(['action' => 'edit', $id]);
                }         
            } else {
                $this->Flash->error(__('The slide could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('slide'));
        $this->set('_serialize', ['slide']);
    }

    /**
     * Delete method
     *  ID : CA-06
     *
     * @param string|null $id Slide id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $slide = $this->Slides->get($id);
        if ($this->Slides->delete($slide)) {
            $this->Flash->success(__('The slide has been deleted.'));
        } else {
            $this->Flash->error(__('The slide could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    /**
     * Update sort method
     *  ID : CA-07
     *     
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function jsonUpdateSort()
    {
        $this->request->allowMethod(['post']);
        $data = $this->request->data;
        $itemCounter = 1;
        foreach($data['view'] as $key => $value){
            $slide = $this->Slides->get($value);
            $slide->sorting = $itemCounter;            
            $this->Slides->save($slide);
            $itemCounter++;            
        }        
        exit;        
    }

    /**
     * Publish method
     *  ID : CA-08
     *
     * @param string|null $id Page id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function publish($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $slide = $this->Slides->get($id);
        $slide->is_publish = 1;
        $this->Slides->save($slide);
        $this->Flash->success(__('The slide has been published.'));        
        return $this->redirect(['action' => 'index']);
    }

    /**
     * Unpublish method
     *  ID : CA-09
     *
     * @param string|null $id Page id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function unpublish($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $slide = $this->Slides->get($id);
        $slide->is_publish = 0;
        $this->Slides->save($slide);
        $this->Flash->success(__('The slide has been unpublished.'));        
        return $this->redirect(['action' => 'index']);
    }
}
