<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CocinerosPlatillosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CocinerosPlatillosTable Test Case
 */
class CocinerosPlatillosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CocinerosPlatillosTable
     */
    public $CocinerosPlatillos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cocineros_platillos',
        'app.cocineros',
        'app.platillos',
        'app.categoria_platillos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CocinerosPlatillos') ? [] : ['className' => 'App\Model\Table\CocinerosPlatillosTable'];
        $this->CocinerosPlatillos = TableRegistry::get('CocinerosPlatillos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CocinerosPlatillos);

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
