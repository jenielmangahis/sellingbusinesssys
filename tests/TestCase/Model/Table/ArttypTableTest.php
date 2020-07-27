<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ArttypTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ArttypTable Test Case
 */
class ArttypTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ArttypTable
     */
    public $Arttyp;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.arttyp'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Arttyp') ? [] : ['className' => 'App\Model\Table\ArttypTable'];
        $this->Arttyp = TableRegistry::get('Arttyp', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Arttyp);

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
