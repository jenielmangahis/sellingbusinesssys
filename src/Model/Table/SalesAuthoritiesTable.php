<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SalesAuthorities Model
 *
 * @property \Cake\ORM\Association\HasMany $Business
 *
 * @method \App\Model\Entity\SalesAuthority get($primaryKey, $options = [])
 * @method \App\Model\Entity\SalesAuthority newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SalesAuthority[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SalesAuthority|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SalesAuthority patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SalesAuthority[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SalesAuthority findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SalesAuthoritiesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('sales_authorities');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Business', [
            'foreignKey' => 'sales_authority_id'
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        return $validator;
    }
}
