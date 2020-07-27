<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\Routing\Router;
use Tools\EasyParcel;
use Tools\TheLorry;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class DebugController extends AppController
{
    public $helpers = ['NavigationSelector'];

    /**
     * initialize method    
     * 
     */
    public function initialize()
    {
        parent::initialize();   
         
    }

    /**
     * beforeFilter method     
     * 
     */
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow();
    }

    /**
     * beforeFilter method     
     * 
     */
    public function afterFilter(Event $event)
    {
        parent::afterFilter($event);
    }

    /**
     * debugFtpGet method     
     * @return void
     */
    public function ownerExpirationDate()
    {   
        $this->Owners = TableRegistry::get('Owners');
        $date = date("Y-m-d");
        $expiration_date = $this->Owners->computeAccountExpirationDate($date);
        echo "Current Date : " . $date . "/" . "Expiration Date : " .  $expiration_date;
        exit;
    }

    public function generateRandomString()
    {
        $index  = 0;
        $random = generateRandomString($index);
        echo $random;
        exit; 
    }

    public function generateOrderNumber()
    {
        $index  = 2;
        $or     = generateTransactionOrderNumber($index);
        echo $or;
        exit; 
    }

    public function easyParcel() 
    {
        require_once(ROOT .DS. 'vendor' . DS . 'tools' . DS . 'EasyParcel.php'); 
        
        // Define your API & authentication keys
        $api_key  = 'EP-vIURPJbIA';
        $auth_key = '5s36boKwri';        
        $easyparcel = new EasyParcel($api_key, $auth_key);
        $easyparcel->useDemo(); 

        // Data that should be passed into the method
        $bulk = [
            [
                'pick_code' => '17000',
                'pick_state' => 'Kelantan',
                'pick_country' => 'MY',
                'send_code' => '53100',
                'send_state' => 'Kuala Lumpur',
                'send_country' => 'MY',
                'weight' => '35'
            ]
        ];

        // Call checkRate() method
        $response = $easyparcel->checkRate($bulk);
        debug($response);
        exit;

    }

    public function theLorryConfirmOrder()
    {
        require_once(ROOT .DS. 'vendor' . DS . 'tools' . DS . 'TheLorry.php');
        $theLorry = new TheLorry();
        $data = [
            'apiKey' => THELORRY_API_KEY,
            'data' => ['uniqueKey' => 'p0fn636kkbprpnyjgu40']
        ];

        $response = $theLorry->confirmBooking($data);
        debug($response);
        exit;
        
    }

    public function theLorry()
    {        
        require_once(ROOT .DS. 'vendor' . DS . 'tools' . DS . 'TheLorry.php');
        $theLorry = new TheLorry();

        $data = [
            'apiKey' => THELORRY_API_KEY,
            'data' => [
                'transportType' => 2,
                'pickupDatetime' => '2018-01-01 12:00:00',
                'addresses' => [
                    0 => [
                        'fullAddress' => 'Lebuh Nipah 1, 11900, Bayan Lepas, Pulau Pinang',
                        'lat' => '5.3381868',
                        'lng' => '100.2964935'
                    ],
                    1 => [
                        'fullAddress' => 'Lebuhraya Bukit Jalil, 40000, Puchong, Selangor',
                        'lat' => '3.050629',
                        'lng' => '101.649001'
                    ]
                ],
                'extras' => [
                    0 => [
                        'name' => 'MANPOWER',
                        'quantity' => 5
                    ]
                ]
            ]            
        ];        

        $response = $theLorry->createUpdateBooking($data);
        debug($response);
        exit;
    }

    public function easyParcelCheckOrderStatus() 
    {
        require_once(ROOT .DS. 'vendor' . DS . 'tools' . DS . 'EasyParcel.php'); 
        // Define your API & authentication keys
        $api_key  = EASY_PARCEL_API_KEY;
        $auth_key = EASY_PARCEL_AUTH_KEY;          
        $easyparcel = new EasyParcel($api_key, $auth_key);
        $easyparcel->useDemo(); 

        $bulk = [
            ['order_no' => 'EI-AAW1PT']
        ];      

        $response = $easyparcel->getOrderStatus($bulk);   
        debug($response);
        exit;
    }

    public function easyParcelMakeOrder() 
    {
        require_once(ROOT .DS. 'vendor' . DS . 'tools' . DS . 'EasyParcel.php'); 
        // Define your API & authentication keys
        $api_key  = EASY_PARCEL_API_KEY;
        $auth_key = EASY_PARCEL_AUTH_KEY;          
        $easyparcel = new EasyParcel($api_key, $auth_key);
        $easyparcel->useDemo(); 

        // Data that should be passed into the method
        $date = "2018-02-02";
        $datetime = new \DateTime($date);
        $datetime->modify('+1 day');
        $day = $datetime->format('D');

        //Cannot accept weekends
        if( $day == 'Sat' ){
            $datetime->modify('+2 day');
        }elseif( $day == 'Sun' ){
            $datetime->modify('+1 day');
        }        

        $date = $datetime->format('Y-m-d');       
        //$date = date("Y-m-d",strtotime( "+1 days"));        
        $bulk = [
            [
                'weight' => "5.0",
                'content' => "Calculator / Lighter",
                'value' => 0,
                'service_id' => 'EP-CS0W',
                'pick_name' => EASY_PARCEL_PICK_NAME,
                'pick_company' => EASY_PARCEL_PICK_COMPANY,
                'pick_contact' => EASY_PARCEL_PICK_CONTACT,
                'pick_addr1' => EASY_PARCEL_PICK_ADDRESS,
                'pick_code' => 17000,
                'pick_state' => 'Kelantan',
                'pick_city' => 'Bayan Baru',
                'pick_country' => EASY_PARCEL_PICKSEND_COUNTRY,
                'send_name' => 'Nixser',
                'send_contact' => '12312312',
                'send_addr1' => 'Sample Address',
                'send_code' => '53100',
                'send_state' => 'Kuala Lumpur',
                'send_country' => EASY_PARCEL_PICKSEND_COUNTRY,
                'collect_date' => $date,
                'sms' => false
                //'send_email' => ''
            ]
        ];

        // Call checkRate() method
        $response = $easyparcel->submitOrder($bulk);
        debug($response);
        exit;        
    }
}
