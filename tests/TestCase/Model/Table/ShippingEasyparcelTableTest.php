<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ShippingEasyparcelTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ShippingEasyparcelTable Test Case
 */
class ShippingEasyparcelTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ShippingEasyparcelTable
     */
    public $ShippingEasyparcel;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.shipping_easyparcel',
        'app.shipping_locations',
        'app.shipping_location_fees',
        'app.users',
        'app.aros',
        'app.acos',
        'app.permissions',
        'app.groups',
        'app.user_entities',
        'app.agencies',
        'app.user_custom_fields'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ShippingEasyparcel') ? [] : ['className' => 'App\Model\Table\ShippingEasyparcelTable'];
        $this->ShippingEasyparcel = TableRegistry::get('ShippingEasyparcel', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ShippingEasyparcel);

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
