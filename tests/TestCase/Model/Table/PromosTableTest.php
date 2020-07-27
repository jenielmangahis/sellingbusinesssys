<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PromosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PromosTable Test Case
 */
class PromosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PromosTable
     */
    public $Promos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.promos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Promos') ? [] : ['className' => 'App\Model\Table\PromosTable'];
        $this->Promos = TableRegistry::get('Promos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Promos);

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
