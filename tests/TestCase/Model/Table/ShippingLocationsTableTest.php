<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ShippingLocationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ShippingLocationsTable Test Case
 */
class ShippingLocationsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ShippingLocationsTable
     */
    public $ShippingLocations;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::exists('ShippingLocations') ? [] : ['className' => 'App\Model\Table\ShippingLocationsTable'];
        $this->ShippingLocations = TableRegistry::get('ShippingLocations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ShippingLocations);

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
