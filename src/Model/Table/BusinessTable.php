<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Filesystem\Folder;

/**
 * Business Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\BelongsTo $BusinessTypes
 * @property \Cake\ORM\Association\BelongsTo $SalesAuthorities
 * @property \Cake\ORM\Association\BelongsTo $BusinessCategories
 *
 * @method \App\Model\Entity\Busines get($primaryKey, $options = [])
 * @method \App\Model\Entity\Busines newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Busines[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Busines|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Busines patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Busines[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Busines findOrCreate($search, callable $callback = null)
 */
class BusinessTable extends Table
{
    const FOLDER_NAME = 'upload/business_cover_photo/';

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('business');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        
        $this->belongsTo('BusinessTypes', [
            'foreignKey' => 'business_type_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('SalesAuthorities', [
            'foreignKey' => 'sales_authority_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('BusinessCategories', [
            'foreignKey' => 'business_category_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('taking', 'create')
            ->notEmpty('taking');

        $validator
            ->requirePresence('weekly_turnover', 'create')
            ->notEmpty('weekly_turnover');

        $validator
            ->requirePresence('average_weekly_takings', 'create')
            ->notEmpty('average_weekly_takings');

        $validator
            ->requirePresence('annual_return', 'create')
            ->notEmpty('annual_return');

        $validator
            ->requirePresence('cover_photo', 'create')
            ->notEmpty('cover_photo');

        $validator
            ->requirePresence('business_listing_title', 'create')
            ->notEmpty('business_listing_title');

        $validator
            ->requirePresence('business_description', 'create')
            ->notEmpty('business_description');

        $validator
            ->requirePresence('state', 'create')
            ->notEmpty('state');

        $validator
            ->requirePresence('postal_code', 'create')
            ->notEmpty('postal_code');

        $validator
            ->requirePresence('primary_agent', 'create')
            ->notEmpty('primary_agent');

        $validator
            ->requirePresence('office', 'create')
            ->notEmpty('office');

        $validator
            ->date('authority_start_date')
            ->requirePresence('authority_start_date', 'create')
            ->notEmpty('authority_start_date');

        $validator
            ->date('authority_end_date')
            ->requirePresence('authority_end_date', 'create')
            ->notEmpty('authority_end_date');

        $validator
            ->requirePresence('feature_listing', 'create')
            ->notEmpty('feature_listing');

        $validator
            ->requirePresence('estate_building', 'create')
            ->notEmpty('estate_building');

        $validator
            ->requirePresence('unit_prefix', 'create')
            ->notEmpty('unit_prefix');

        $validator
            ->requirePresence('unit_number', 'create')
            ->notEmpty('unit_number');

        $validator
            ->requirePresence('street_lot_number', 'create')
            ->notEmpty('street_lot_number');

        $validator
            ->requirePresence('street_name', 'create')
            ->notEmpty('street_name');

        $validator
            ->requirePresence('listing_suburb', 'create')
            ->notEmpty('listing_suburb');

        $validator
            ->requirePresence('advertising_suburb', 'create')
            ->notEmpty('advertising_suburb');

        $validator
            ->requirePresence('google_maps_address', 'create')
            ->notEmpty('google_maps_address');

        $validator
            ->requirePresence('marketing_sales_price', 'create')
            ->notEmpty('marketing_sales_price');

        $validator
            ->requirePresence('marketing_price_text', 'create')
            ->notEmpty('marketing_price_text');

        $validator
            ->requirePresence('annual_lease_price', 'create')
            ->notEmpty('annual_lease_price');

        $validator
            ->requirePresence('actual_sales_price', 'create')
            ->notEmpty('actual_sales_price');

        $validator
            ->requirePresence('price_comment', 'create')
            ->notEmpty('price_comment');

        $validator
            ->requirePresence('lease_terms', 'create')
            ->notEmpty('lease_terms');

        $validator
            ->requirePresence('parking', 'create')
            ->notEmpty('parking');

        $validator
            ->requirePresence('lease_comments', 'create')
            ->notEmpty('lease_comments');

        $validator
            ->requirePresence('other_feature', 'create')
            ->notEmpty('other_feature');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['business_type_id'], 'BusinessTypes'));
        $rules->add($rules->existsIn(['sales_authority_id'], 'SalesAuthorities'));
        $rules->add($rules->existsIn(['business_category_id'], 'BusinessCategories'));

        return $rules;
    }

    public function getAttachmentFolderLocation()
    {
        $path = WWW_ROOT . self::FOLDER_NAME; 
        return $path;
    }

    public function getFolderName()
    {
        return self::FOLDER_NAME;
    }

    public function uploadCoverPhoto( $obj, $file, $is_completed = false ) 
    {
        //Store photo
        $ext  = substr(strtolower(strrchr($file['name'], '.')), 1);
        $setNewFileName = 'cover_photo_' . time() . "_" . rand(000000, 999999) . $obj->id . '.' . $ext;

        //Create folder
        $locationPath   = self::getAttachmentFolderLocation() . $obj->id;        
        $dir = new Folder($locationPath, true, 0755);
        move_uploaded_file($file['tmp_name'], $locationPath . "/" . $setNewFileName);
        return $setNewFileName;
    }
}
