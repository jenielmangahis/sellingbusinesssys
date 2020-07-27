<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PlanGroupsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PlanGroupsTable Test Case
 */
class PlanGroupsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PlanGroupsTable
     */
    public $PlanGroups;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.plan_groups'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PlanGroups') ? [] : ['className' => 'App\Model\Table\PlanGroupsTable'];
        $this->PlanGroups = TableRegistry::get('PlanGroups', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PlanGroups);

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
