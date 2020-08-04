<?php
namespace App\Model\Table;

use App\Model\Entity\User;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Auth\DefaultPasswordHasher;

/**
 * Users Model
 */
class UsersTable extends Table
{
    const IS_ACTIVE    = 1;
    const ISNOT_ACTIVE = 0;

    /**
     * Initialize method
     * ID : MDL-TBL-01
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('users');
        $this->displayField('full_name');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->addBehavior('Acl.Acl', ['type' => 'requester']);
        // Just add the belongsTo relation with GroupsTable
        $this->belongsTo('Groups', [
            'foreignKey' => 'group_id',
        ]);
        $this->hasMany('UserEntities', [
            'foreignKey' => 'user_id'
        ]);
    }

    /**
     * Default validation rules.
     * ID : MDL-TBL-02
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->notEmpty('username', 'A username is required')
            ->notEmpty('password', 'A password is required')
            ->notEmpty('role', 'A role is required')
            /*->add('username','custom',[
                'rule' => array('custom', '/^[a-z0-9]{3,}$/i'),
                'message' => 'Only letters and integers, min 3 characters'
            ])*/
            ->add('role', 'inList', [
                'rule' => ['inList', ['administrator']],
                'message' => 'Please enter a valid role'
            ]);

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        return $validator;
    }

    public function validationPassword(Validator $validator )
    {
 
        $validator
            ->add('old_password','custom',[
                'rule'=>  function($value, $context){
                    $user = $this->get($context['data']['id']);
                    if ($user) {
                        if ((new DefaultPasswordHasher)->check($value, $user->password)) {
                            return true;
                        }
                    }
                    return false;
                },
                'message'=>'The old password does not match the current password!',
            ])
            ->notEmpty('old_password');
 
        
 
        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     * ID : MDL-TBL-03
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->isUnique(['email']));
        return $rules;
    }

    /*public function beforeSave(\Cake\Event\Event $event, \Cake\ORM\Entity $entity, 
        \ArrayObject $options)
    {
        $hasher = new DefaultPasswordHasher;
        $entity->password = $hasher->hash($entity->password);
        return true;
    }*/

     /**
     * Generate user random password         
     * ID : MDL-TBL-04     
     * @return string
     */
    public function generateRandomPassword()
    {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }

    public function isActive() 
    {
        return self::IS_ACTIVE;
    }
}
