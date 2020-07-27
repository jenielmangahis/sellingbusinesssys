<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ShippingThelorryTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ShippingThelorryTable Test Case
 */
class ShippingThelorryTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ShippingThelorryTable
     */
    public $ShippingThelorry;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.shipping_thelorry',
        'app.transactions',
        'app.users',
        'app.aros',
        'app.acos',
        'app.permissions',
        'app.groups',
        'app.user_entities',
        'app.agencies',
        'app.user_custom_fields',
        'app.shipping_locations',
        'app.shipping_location_fees',
        'app.transaction_details',
        'app.products',
        'app.product_categories',
        'app.owners',
        'app.ads',
        'app.product_images',
        'app.product_rating',
        'app.product_prices',
        'app.product_availability',
        'app.user_borrowed_items'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ShippingThelorry') ? [] : ['className' => 'App\Model\Table\ShippingThelorryTable'];
        $this->ShippingThelorry = TableRegistry::get('ShippingThelorry', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ShippingThelorry);

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

    /**
     * Test optionTransportType method
     *
     * @return void
     */
    public function testOptionTransportType()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
