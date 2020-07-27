<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\Routing\Router;
/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class AutocompleteController extends AppController
{
    /**
     * initialize method
     *  ID : CA-01
     * 
     */
    public function initialize()
    {
        parent::initialize();
        $session = $this->request->session();    
        $user_data = $session->read('User.data');  
        
        if( isset($user_data) ){
            if( $user_data->group_id == 1 ){ //Company
                $this->Auth->allow();
            }
        }   
    }

   
    public function transaction_number()
    {   
        $this->Transactions = TableRegistry::get('Transactions');

        $query = $this->request->query['q'];

        $transactions = $this->Transactions->find('all')            
            ->where(['Transactions.transaction_number LIKE' => '%' . $query . '%'])
        ;

        $json_data = array();
        foreach( $transactions as $t ){
            $json_data[] = ['id' => $t->transaction_number, 'name' => $t->transaction_number];
        }
        
        echo json_encode($json_data);
        exit;
    }
}