<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VehicleMaintenanceLogsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VehicleMaintenanceLogsTable Test Case
 */
class VehicleMaintenanceLogsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\VehicleMaintenanceLogsTable
     */
    public $VehicleMaintenanceLogs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.vehicle_maintenance_logs',
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
        'app.vendors',
        'app.vendor_items',
        'app.items',
        'app.item_categories',
        'app.item_expirations',
        'app.vehicles',
        'app.vehicle_types',
        'app.colors',
        'app.vehicle_files'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('VehicleMaintenanceLogs') ? [] : ['className' => 'App\Model\Table\VehicleMaintenanceLogsTable'];
        $this->VehicleMaintenanceLogs = TableRegistry::get('VehicleMaintenanceLogs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->VehicleMaintenanceLogs);

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
