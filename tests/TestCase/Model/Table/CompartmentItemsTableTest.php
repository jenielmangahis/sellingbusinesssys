<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CompartmentItemsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CompartmentItemsTable Test Case
 */
class CompartmentItemsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CompartmentItemsTable
     */
    public $CompartmentItems;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.compartment_items',
        'app.items',
        'app.agencies',
        'app.account_types',
        'app.member_types',
        'app.user_entities',
        'app.users',
        'app.aros',
        'app.acos',
        'app.permissions',
        'app.groups',
        'app.user_custom_fields',
        'app.item_categories',
        'app.vendors',
        'app.item_expirations',
        'app.vendor_items'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CompartmentItems') ? [] : ['className' => 'App\Model\Table\CompartmentItemsTable'];
        $this->CompartmentItems = TableRegistry::get('CompartmentItems', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CompartmentItems);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
