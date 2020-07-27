<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\View\CellTrait;
use Cake\Routing\Router;

/**
 * Main Controller
 *
 * @property \App\Model\Table\UsersTable $Main
 */
class MainController extends AppController
{
    public $helpers = ['NavigationSelector'];

    use CellTrait;

    /**
     * Initialize Method
     *  ID : CA-01
     * 
     */
    public function initialize()
    {
        parent::initialize();
        $nav_selected = ["home"];
        $this->set('nav_selected', $nav_selected);
        $this->set('website_title', COMPANY_NAME);
        $this->set('page_title', 'Home');
    }    
    
    /**
     * BeforeFilter Method
     *  ID : CA-02
     * 
     */
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['index','filter', 'search']);
    }

    /**
     * Index method for homepage
     *  ID : CA-03
     * @return void
     */

    public function index()
    {
        return $this->redirect(['controller' => 'users', 'action' => 'login']);     
    }
}
