<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ArtikelsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ArtikelsTable Test Case
 */
class ArtikelsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ArtikelsTable
     */
    public $Artikels;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.artikels',
        'app.brands',
        'app.product_types',
        'app.colors',
        'app.main_colors'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Artikels') ? [] : ['className' => 'App\Model\Table\ArtikelsTable'];
        $this->Artikels = TableRegistry::get('Artikels', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Artikels);

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
