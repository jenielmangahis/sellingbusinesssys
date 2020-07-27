<?php
namespace App\Test\TestCase\Controller;

use App\Controller\ProductAvailabilityController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\ProductAvailabilityController Test Case
 */
class ProductAvailabilityControllerTest extends IntegrationTestCase
{

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
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
