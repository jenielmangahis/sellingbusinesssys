<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CheckedItemsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CheckedItemsTable Test Case
 */
class CheckedItemsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CheckedItemsTable
     */
    public $CheckedItems;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.checked_items',
        'app.compartment_items',
        'app.vehicle_compartments',
        'app.vehicles',
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
        'app.vehicle_types',
        'app.colors',
        'app.vehicle_files',
        'app.checked_compartments',
        'app.items',
        'app.item_categories',
        'app.vendors',
        'app.vendor_items',
        'app.item_expirations'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CheckedItems') ? [] : ['className' => 'App\Model\Table\CheckedItemsTable'];
        $this->CheckedItems = TableRegistry::get('CheckedItems', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CheckedItems);

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
