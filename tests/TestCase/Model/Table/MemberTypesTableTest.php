<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MemberTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MemberTypesTable Test Case
 */
class MemberTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MemberTypesTable
     */
    public $MemberTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.member_types',
        'app.agencies',
        'app.account_types',
        'app.user_entities',
        'app.users',
        'app.aros',
        'app.acos',
        'app.permissions',
        'app.groups',
        'app.members',
        'app.user_custom_fields'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MemberTypes') ? [] : ['className' => 'App\Model\Table\MemberTypesTable'];
        $this->MemberTypes = TableRegistry::get('MemberTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MemberTypes);

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
