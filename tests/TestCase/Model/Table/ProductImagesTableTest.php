<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProductImagesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductImagesTable Test Case
 */
class ProductImagesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProductImagesTable
     */
    public $ProductImages;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.product_images',
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
        'app.tenants'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ProductImages') ? [] : ['className' => 'App\Model\Table\ProductImagesTable'];
        $this->ProductImages = TableRegistry::get('ProductImages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProductImages);

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
