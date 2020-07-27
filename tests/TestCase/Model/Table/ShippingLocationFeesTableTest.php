<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ShippingLocationFeesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ShippingLocationFeesTable Test Case
 */
class ShippingLocationFeesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ShippingLocationFeesTable
     */
    public $ShippingLocationFees;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.shipping_location_fees',
        'app.shipping_locations'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ShippingLocationFees') ? [] : ['className' => 'App\Model\Table\ShippingLocationFeesTable'];
        $this->ShippingLocationFees = TableRegistry::get('ShippingLocationFees', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ShippingLocationFees);

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
