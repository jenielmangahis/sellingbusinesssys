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
 * UserEntities Controller
 *
 * @property \App\Model\Table\UserEntitiesTable $UserEntities
 */
class ProfileController extends AppController
{

    /**
     * initialize method    
     * 
     */
    public function initialize()
    {
        parent::initialize();
        $nav_selected = [""];

        $this->set('nav_selected', $nav_selected);        
        //$this->Auth->allow();
    }

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->Users = TableRegistry::get("Users");

        $session   = $this->request->session();    
        $user_data = $session->read('User.data');
        $user      = $this->Users->find()          
            ->contain(['Groups'])  
            ->where(['Users.id' => $user_data->id])
            ->first()
        ;        
        $this->set(compact('user'));
    }

    /**
     * Edit method
     *     
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit()
    {
        $this->Users = TableRegistry::get("Users");

        $session   = $this->request->session();    
        $user_data = $session->read('User.data');

        $user = $this->Users->get($user_data->id, [
            'contain' => []
        ]);
        
        if ($this->request->is(['patch', 'post', 'put'])) {            
            $user    = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {

                $this->Flash->success(__('Profile has been updated.'));

                //Update user session
                $user = $this->Users->find()
                    ->contain(['Groups'])             
                    ->where(['Users.id' => $user_data->id])
                    ->first()
                ;
                $session  = $this->request->session();  
                $session->write('User.data', $user); 
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Cannot update profile. Please, try again.'));
            }
        }
       
        $groups = $this->Users->Groups->find('list');
        $this->set(compact('user', 'groups'));
        $this->set('_serialize', ['user']);
    }

    /**
     * User Change Profile Photo
     * ID : CA-03   
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function change_profile_photo()
    {
        $this->Users = TableRegistry::get('Users');
        $session      = $this->request->session();    
        $user_session = $session->read('User.data');   
        
        if($this->request->is('post')) {
            $user = $this->Users->find()
                ->contain(['Groups'])
                ->where(['Users.id' => $user_session->id])
                ->first()
            ;  

            $file = $this->request->data['photo'];           
            $ext  = substr(strtolower(strrchr($file['name'], '.')), 1); 
            $arr_ext        = array('jpg', 'jpeg', 'gif');
            $setNewFileName = time() . "_" . rand(000000, 999999);
            if (in_array($ext, $arr_ext)) { 
                $directory_name = WWW_ROOT . '/upload/users/' . $user->id . "/";                        
                if(!is_dir($directory_name)){                                           
                    mkdir($directory_name, 755, true);
                }           
                move_uploaded_file($file['tmp_name'], WWW_ROOT . '/upload/users/' . $user->id . "/" . $setNewFileName . '.' . $ext);                        
                chmod(WWW_ROOT . '/upload/users/' . $user->id . "/" . $setNewFileName . '.' . $ext, 0755);   

                $imageFileName = $setNewFileName . '.' . $ext;

                $user->photo = $imageFileName;
                $this->Users->save($user);                
                $this->Flash->success(__('Your profile has been updated.'));   
                $session->write('User.data', $user);
                return $this->redirect(['action' => 'index']);  
            }
        }        
    }

    /**
     * Change Password method     
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function change_password()
    {      
        $this->Users = TableRegistry::get('Users');
        $session      = $this->request->session();    
        $user_session = $session->read('User.data');     

        $user = $this->Users->get($user_session->id);  

        if ($this->request->is(['patch', 'post', 'put'])) {
            $data = $this->request->data;
            if( $data['password'] == $data['repassword'] ){

                $user->password = $data['password'];                
                
                if( $this->Users->save($user) ){

                    //Send email
                    $edata = [
                        'user_name' => $user->firstname,
                        'password' => $data['password']                        
                    ];
                    $recipient = $user_session->email;                     
                    $email_smtp = new Email('cake_smtp');
                    $email_smtp->from(['websystem@nixstage.com' => 'WebSystem'])
                        ->template('change_password')
                        ->emailFormat('html')
                        ->to($recipient)                                                                                                     
                        ->subject('Nixser : Change Password')
                        ->viewVars(['edata' => $edata])
                        ->send();

                    $this->Flash->success(__('Your password has been changed.'));
                    return $this->redirect(['controller' => 'profile', 'action' => 'index']);
                }else{
                    $this->Flash->error(__('Your password could not be change. Please, try again.'));                    
                }
            }else{
                $this->Flash->error(__('Password does not match!'));                    
            }
        }

        $this->set(['user' => $user]);
    }
}
