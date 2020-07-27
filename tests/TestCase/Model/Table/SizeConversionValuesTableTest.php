<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SizeConversionValuesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SizeConversionValuesTable Test Case
 */
class SizeConversionValuesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SizeConversionValuesTable
     */
    public $SizeConversionValues;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.size_conversion_values',
        'app.size_conversions',
        'app.sizes',
        'app.product_types',
        'app.size_values'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('SizeConversionValues') ? [] : ['className' => 'App\Model\Table\SizeConversionValuesTable'];
        $this->SizeConversionValues = TableRegistry::get('SizeConversionValues', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SizeConversionValues);

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
