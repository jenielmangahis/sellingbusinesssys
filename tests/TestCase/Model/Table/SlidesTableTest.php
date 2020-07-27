<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SlidesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SlidesTable Test Case
 */
class SlidesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SlidesTable
     */
    public $Slides;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.slides'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Slides') ? [] : ['className' => 'App\Model\Table\SlidesTable'];
        $this->Slides = TableRegistry::get('Slides', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Slides);

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
