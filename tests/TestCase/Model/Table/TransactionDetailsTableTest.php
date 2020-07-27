<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TransactionDetailsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TransactionDetailsTable Test Case
 */
class TransactionDetailsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TransactionDetailsTable
     */
    public $TransactionDetails;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.transaction_details',
        'app.transactions',
        'app.users',
        'app.aros',
        'app.acos',
        'app.permissions',
        'app.groups',
        'app.user_entities',
        'app.agencies',
        'app.user_custom_fields',
        'app.products',
        'app.product_categories',
        'app.owners',
        'app.ads',
        'app.product_images',
        'app.product_rating',
        'app.product_prices'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TransactionDetails') ? [] : ['className' => 'App\Model\Table\TransactionDetailsTable'];
        $this->TransactionDetails = TableRegistry::get('TransactionDetails', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TransactionDetails);

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
