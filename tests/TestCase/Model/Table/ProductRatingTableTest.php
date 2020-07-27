<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProductRatingTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductRatingTable Test Case
 */
class ProductRatingTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProductRatingTable
     */
    public $ProductRating;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.product_rating',
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
        'app.product_images'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ProductRating') ? [] : ['className' => 'App\Model\Table\ProductRatingTable'];
        $this->ProductRating = TableRegistry::get('ProductRating', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProductRating);

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
