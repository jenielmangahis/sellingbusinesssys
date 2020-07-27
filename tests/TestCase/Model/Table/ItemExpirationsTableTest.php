<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ItemExpirationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ItemExpirationsTable Test Case
 */
class ItemExpirationsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ItemExpirationsTable
     */
    public $ItemExpirations;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.item_expirations',
        'app.items'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ItemExpirations') ? [] : ['className' => 'App\Model\Table\ItemExpirationsTable'];
        $this->ItemExpirations = TableRegistry::get('ItemExpirations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ItemExpirations);

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
