<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserBorrowedItemsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserBorrowedItemsTable Test Case
 */
class UserBorrowedItemsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UserBorrowedItemsTable
     */
    public $UserBorrowedItems;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.user_borrowed_items',
        'app.users',
        'app.aros',
        'app.acos',
        'app.permissions',
        'app.groups',
        'app.user_entities',
        'app.agencies',
        'app.user_custom_fields',
        'app.owners',
        'app.products',
        'app.product_categories',
        'app.product_images',
        'app.product_rating',
        'app.product_prices',
        'app.transaction_details',
        'app.transactions',
        'app.ads'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('UserBorrowedItems') ? [] : ['className' => 'App\Model\Table\UserBorrowedItemsTable'];
        $this->UserBorrowedItems = TableRegistry::get('UserBorrowedItems', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UserBorrowedItems);

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
