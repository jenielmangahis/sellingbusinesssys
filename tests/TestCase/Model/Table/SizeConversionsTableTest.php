<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SizeConversionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SizeConversionsTable Test Case
 */
class SizeConversionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SizeConversionsTable
     */
    public $SizeConversions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.size_conversions',
        'app.size_conversion_values'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('SizeConversions') ? [] : ['className' => 'App\Model\Table\SizeConversionsTable'];
        $this->SizeConversions = TableRegistry::get('SizeConversions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SizeConversions);

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
