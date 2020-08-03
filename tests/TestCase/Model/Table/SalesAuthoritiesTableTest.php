<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SalesAuthoritiesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SalesAuthoritiesTable Test Case
 */
class SalesAuthoritiesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SalesAuthoritiesTable
     */
    public $SalesAuthorities;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.sales_authorities',
        'app.business',
        'app.users',
        'app.aros',
        'app.acos',
        'app.permissions',
        'app.groups',
        'app.user_entities',
        'app.business_types'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('SalesAuthorities') ? [] : ['className' => 'App\Model\Table\SalesAuthoritiesTable'];
        $this->SalesAuthorities = TableRegistry::get('SalesAuthorities', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SalesAuthorities);

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
