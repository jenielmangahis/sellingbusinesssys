<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WebshopCategoriesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WebshopCategoriesTable Test Case
 */
class WebshopCategoriesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\WebshopCategoriesTable
     */
    public $WebshopCategories;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::exists('WebshopCategories') ? [] : ['className' => 'App\Model\Table\WebshopCategoriesTable'];
        $this->WebshopCategories = TableRegistry::get('WebshopCategories', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->WebshopCategories);

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
