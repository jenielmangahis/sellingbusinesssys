<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FuelLogsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FuelLogsTable Test Case
 */
class FuelLogsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FuelLogsTable
     */
    public $FuelLogs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.fuel_logs',
        'app.user_entities',
        'app.agencies',
        'app.account_types',
        'app.member_types',
        'app.users',
        'app.aros',
        'app.acos',
        'app.permissions',
        'app.groups',
        'app.user_custom_fields',
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
        $config = TableRegistry::exists('FuelLogs') ? [] : ['className' => 'App\Model\Table\FuelLogsTable'];
        $this->FuelLogs = TableRegistry::get('FuelLogs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FuelLogs);

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
