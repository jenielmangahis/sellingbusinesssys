<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\Routing\Router;
use Cake\I18n\I18n;
use \Hashids\Hashids;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    public $components = [
        'Acl' => [
            'className' => 'Acl.Acl'
        ]
    ];

    public $hashids = [
        'salt' => '__YOUR_SALT_KEY__',
        'min_hash_length' => 8,
        'alphabet' => 'abcdefghijklmnopqrstuvwxyz0123456789'
    ];

    /**
     * Hashids function
     *
     * @return object
     */
    public function hashids()
    {
        return $hashids = new Hashids(
            $this->hashids['salt'],
            $this->hashids['min_hash_length'],
            $this->hashids['alphabet']
        );
    }

    /**
     * Initialization hook method.
     * ID : CA-01
     * Use this method to add common initialization code like loading components.
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
            'authorize' => [
                'Acl.Actions' => ['actionPath' => 'controllers/']
            ],
            'loginAction' => [
                'plugin' => false,
                'controller' => 'login'                
            ],
            'loginRedirect' => [
                'controller' => 'users',
                'action' => 'dashboard'
            ],
            'logoutRedirect' => [
                'controller' => 'Main',
                'action' => 'index',
                
            ],
            'unauthorizedRedirect' => [
                'controller' => 'Users',
                'action' => 'loggedin',
                'prefix' => false
            ],
            'authError' => 'Cannot view page.',
            'flash' => [
                'element' => 'error'
            ]
        ]);
        
        $session   = $this->request->session();    
        $user_data = $session->read('User.data');
        $base_url  = Router::url('/',true);          
        $this->set([
            'base_url' => $base_url,
            'hdr_user_data' => $user_data            
        ]);
    }

    /**
     * beforeFilter method
     * ID : CA-02
     * 
     */
    public function beforeFilter(Event $event)
    {
        $this->Auth->allow('login');
    }

    /**
     * isAuthorized method
     * ID : CA-03
     * @return void
     */
    public function isAuthorized($user) {
        // Here is where we should verify the role and give access based on role
         
        return true;
    }
}
