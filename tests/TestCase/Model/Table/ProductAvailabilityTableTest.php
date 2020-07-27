<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProductAvailabilityTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductAvailabilityTable Test Case
 */
class ProductAvailabilityTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProductAvailabilityTable
     */
    public $ProductAvailability;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.product_availability',
        'app.products',
        'app.product_categories',
        'app.owners',
        'app.users',
        'app.aros',
        'app.acos',
        'app.permissions',
        'app.groups',
        'app.user_entities',
        'app.agencies',
        'app.user_custom_fields',
        'app.ads',
        'app.product_images',
        'app.product_rating',
        'app.product_prices',
        'app.transaction_details',
        'app.transactions',
        'app.shipping_locations',
        'app.shipping_location_fees',
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
        $config = TableRegistry::exists('ProductAvailability') ? [] : ['className' => 'App\Model\Table\ProductAvailabilityTable'];
        $this->ProductAvailability = TableRegistry::get('ProductAvailability', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProductAvailability);

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
