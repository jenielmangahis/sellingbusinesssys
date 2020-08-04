<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BusinessTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BusinessTable Test Case
 */
class BusinessTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BusinessTable
     */
    public $Business;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.business',
        'app.users',
        'app.aros',
        'app.acos',
        'app.permissions',
        'app.groups',
        'app.user_entities',
        'app.business_types',
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
        $config = TableRegistry::exists('Business') ? [] : ['className' => 'App\Model\Table\BusinessTable'];
        $this->Business = TableRegistry::get('Business', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Business);

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
