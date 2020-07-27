<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WebshopCategoryArtikelsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WebshopCategoryArtikelsTable Test Case
 */
class WebshopCategoryArtikelsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\WebshopCategoryArtikelsTable
     */
    public $WebshopCategoryArtikels;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.webshop_category_artikels',
        'app.artikels',
        'app.brands',
        'app.product_types',
        'app.colors',
        'app.webshop_categories'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('WebshopCategoryArtikels') ? [] : ['className' => 'App\Model\Table\WebshopCategoryArtikelsTable'];
        $this->WebshopCategoryArtikels = TableRegistry::get('WebshopCategoryArtikels', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->WebshopCategoryArtikels);

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
