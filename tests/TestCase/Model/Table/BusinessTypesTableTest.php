<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BusinessTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BusinessTypesTable Test Case
 */
class BusinessTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BusinessTypesTable
     */
    public $BusinessTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.business_types',
        'app.business',
        'app.users',
        'app.aros',
        'app.acos',
        'app.permissions',
        'app.groups',
        'app.user_entities',
        'app.sales_authorities'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('BusinessTypes') ? [] : ['className' => 'App\Model\Table\BusinessTypesTable'];
        $this->BusinessTypes = TableRegistry::get('BusinessTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BusinessTypes);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
