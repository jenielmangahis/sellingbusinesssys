<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\Routing\Router;
use App\Controller\SyncServiceController;
use Cake\Filesystem\Folder;
use Cake\Filesystem\File;
use Cake\Mailer\Email;

/**
 * Groups Controller
 *
 * @property \App\Model\Table\GroupsTable $Groups
 */
class ResetPasswordController extends AppController
{
    /**
     * initialize method
     *  ID : CA-01
     * 
     */
    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow();
    }

    /**
     * Index method
     * ID : CA-02
     *
     * @param string reset code
     * @return void
     */
    public function index( $reset_code )
    {
        $this->Users = TableRegistry::get('Users');        

        $this->viewBuilder()->layout("Users/reset_password");        

        $is_code_valid = false;
        $user = array();

        if( $reset_code != '' ){
            $user = $this->Users->find()
                ->where(['Users.reset_code' => $reset_code])
                ->first()
            ;
            if( $user ){
                $is_code_valid = true;
                if ($this->request->is('post')) {     
                    $data = $this->request->data;                    
                    if( $data['password'] == $data['repassword'] ){
                        $user = $this->Users->find()
                            ->where(['Users.reset_code' => $reset_code])
                            ->first()
                        ;
                        
                        if( $user ){
                            //EMPTY RESET CODE AND UPDATE NEW PASSWORD
                            $user->reset_code = "";
                            $user->password = $data['password'];
                            $this->Users->save($user);
                            
                            //SEND EMAIL NOTIFICATION                            
                            $edata = [
                                'user_name' => $user->firstname,
                                'new_password' => $data['password']
                            ];

                            $recipient = $user->email;                     
                            $email_smtp = new Email('cake_smtp');
                            $email_smtp->from(['websystem@nixstage.com' => 'WebSystem'])
                                ->template('reset_password')
                                ->emailFormat('html')
                                ->to($recipient)                                                                                                     
                                ->subject('Nixser : New Password')
                                ->viewVars(['edata' => $edata])
                                ->send();

                            //REDIRECT TO LOGIN
                            $this->Flash->success(__('Password was successfully updated.')); 
                            return $this->redirect(['controller' => 'users', 'action' => 'login']);
                        }else{
                            $this->Flash->error(__('Invalid code')); 
                        }
                    }else{
                        $this->Flash->error(__('Password does not match!'));            
                    }
                }
            }else{
                $this->Flash->error(__('Invalid code'));    
            }
        }else{
            $this->Flash->error(__('Invalid code'));
        }
        $this->set(compact('is_code_valid','user'));
    }
}
