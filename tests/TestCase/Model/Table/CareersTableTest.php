<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CareersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CareersTable Test Case
 */
class CareersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CareersTable
     */
    public $Careers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.careers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Careers') ? [] : ['className' => 'App\Model\Table\CareersTable'];
        $this->Careers = TableRegistry::get('Careers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Careers);

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
