<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Pages Controller
 *
 * @property \App\Model\Table\PagesTable $Pages
 */
class PagesController extends AppController
{
    /**
     * initialize method
     *  ID : CA-01
     * 
     */
    public function initialize()
    {
        parent::initialize();
        $nav_selected = ["pages"];
        $this->set('nav_selected', $nav_selected);

        $this->Auth->allow(['frontview','contact_us']);        
    }

    /**
     * Index method
     *  ID : CA-02
     *
     * @return void
     */
    public function index()
    {
        if( isset($this->request->query['query']) ){
            $query = $this->request->query['query'];
            $pages = $this->Pages->find('all')
                ->where(['Pages.name LIKE' => '%' . $query . '%'])                                
            ;
        }else{
            $pages = $this->Pages->find('all');
        }    

        $this->set('pages', $this->paginate($pages));
        $this->set('_serialize', ['pages']);
    }

    /**
     * View method
     *  ID : CA-03
     *
     * @param string|null $id Page id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $page = $this->Pages->get($id, [
            'contain' => []
        ]);
        $this->set('page', $page);
        $this->set('_serialize', ['page']);
    }

    /**
     * Add method
     *  ID : CA-04
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $page = $this->Pages->newEntity();
        if ($this->request->is('post')) {
            $page = $this->Pages->patchEntity($page, $this->request->data);
            if ($this->Pages->save($page)) {
                $this->Flash->success(__('The page has been saved.'));
                $action = $this->request->data['save'];
                if( $action == 'save' ){
                    return $this->redirect(['action' => 'index']);
                }else{
                    return $this->redirect(['action' => 'add']);
                }                    
            } else {
                $this->Flash->error(__('The page could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('page'));
        $this->set('_serialize', ['page']);
    }

    /**
     * Edit method
     *  ID : CA-05
     *
     * @param string|null $id Page id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $page = $this->Pages->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $page = $this->Pages->patchEntity($page, $this->request->data);
            if ($this->Pages->save($page)) {
                $this->Flash->success(__('The page has been saved.'));
                $action = $this->request->data['save'];
                if( $action == 'save' ){
                    return $this->redirect(['action' => 'index']);
                }else{
                    return $this->redirect(['action' => 'edit', $id]);
                }         
            } else {
                $this->Flash->error(__('The page could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('page'));
        $this->set('_serialize', ['page']);
    }

    /**
     * Delete method
     *  ID : CA-06
     *
     * @param string|null $id Page id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $page = $this->Pages->get($id);
        if ($this->Pages->delete($page)) {
            $this->Flash->success(__('The page has been deleted.'));
        } else {
            $this->Flash->error(__('The page could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    /**
     * Publish method
     *  ID : CA-07
     *
     * @param string|null $id Page id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function publish($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $page = $this->Pages->get($id);
        $page->is_publish = 1;
        $this->Pages->save($page);
        $this->Flash->success(__('The page has been published.'));        
        return $this->redirect(['action' => 'index']);
    }

    /**
     * Unpublish method
     *  ID : CA-08
     *
     * @param string|null $id Page id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function unpublish($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $page = $this->Pages->get($id);
        $page->is_publish = 0;
        $this->Pages->save($page);
        $this->Flash->success(__('The page has been unpublished.'));        
        return $this->redirect(['action' => 'index']);
    }

    /**
     * frontview method
     * ID : CA-09   
     */
    public function frontview($id = null) {                 
        $page = $this->Pages->get($id, [
            'contain' => []
        ]);    

        if( $page->id == 2 ){
            $front_nav_selected = 'about-us';    
        }elseif( $page->id == 6 ){
            $front_nav_selected = 'faq';    
        }
        $this->viewBuilder()->layout('template_no_slider');    
        $this->set([
            'page' => $page,
            'page_title' => $page->name,
            'mt_for_layout' => $page->meta_title,
            'mk_for_layout' => $page->meta_keyword,
            'md_for_layout' => $page->meta_description,
            'front_nav_selected' => $front_nav_selected
        ]);        
    }

    /**
     * Contact method
     * ID : CA-10  
     */
    public function contact_us() {     
        $this->CompanyDetails = TableRegistry::get('CompanyDetails');

        $companyDetails = $this->CompanyDetails->get(1);

        $this->viewBuilder()->layout('template_no_slider');                
        $this->set([            
            'page_title' => "Contact Us",
            'companyDetails' => $companyDetails,
            'mt_for_layout' => "Contact Us",
            'mk_for_layout' => "Contact Us",
            'md_for_layout' => "Contact Us",
            'front_nav_selected' => 'contact-us'
        ]);   
    }
}
