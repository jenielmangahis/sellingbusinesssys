<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CheckedCompartmentsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CheckedCompartmentsTable Test Case
 */
class CheckedCompartmentsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CheckedCompartmentsTable
     */
    public $CheckedCompartments;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.checked_compartments',
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
        $config = TableRegistry::exists('CheckedCompartments') ? [] : ['className' => 'App\Model\Table\CheckedCompartmentsTable'];
        $this->CheckedCompartments = TableRegistry::get('CheckedCompartments', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CheckedCompartments);

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
