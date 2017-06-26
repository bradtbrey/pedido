<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PlatillosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PlatillosTable Test Case
 */
class PlatillosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PlatillosTable
     */
    public $Platillos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.platillos',
        'app.categoria_platillos',
        'app.cocineros',
        'app.cocineros_platillos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Platillos') ? [] : ['className' => 'App\Model\Table\PlatillosTable'];
        $this->Platillos = TableRegistry::get('Platillos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Platillos);

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
