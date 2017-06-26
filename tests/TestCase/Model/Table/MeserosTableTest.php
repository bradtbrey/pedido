<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MeserosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MeserosTable Test Case
 */
class MeserosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MeserosTable
     */
    public $Meseros;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.meseros'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Meseros') ? [] : ['className' => 'App\Model\Table\MeserosTable'];
        $this->Meseros = TableRegistry::get('Meseros', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Meseros);

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
