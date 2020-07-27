<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PlanCategoriesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PlanCategoriesTable Test Case
 */
class PlanCategoriesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PlanCategoriesTable
     */
    public $PlanCategories;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.plan_categories',
        'app.plans',
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
        $config = TableRegistry::exists('PlanCategories') ? [] : ['className' => 'App\Model\Table\PlanCategoriesTable'];
        $this->PlanCategories = TableRegistry::get('PlanCategories', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PlanCategories);

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
