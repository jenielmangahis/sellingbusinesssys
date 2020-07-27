<?php
namespace App\Test\TestCase\Controller;

use App\Controller\NewslettersController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\NewslettersController Test Case
 */
class NewslettersControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.newsletters',
        'app.groups',
        'app.users',
        'app.aros',
        'app.acos',
        'app.permissions',
        'app.user_entities',
        'app.agencies',
        'app.user_custom_fields'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
