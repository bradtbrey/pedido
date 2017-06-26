<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CategoriaPlatillosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CategoriaPlatillosTable Test Case
 */
class CategoriaPlatillosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CategoriaPlatillosTable
     */
    public $CategoriaPlatillos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.categoria_platillos',
        'app.platillos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CategoriaPlatillos') ? [] : ['className' => 'App\Model\Table\CategoriaPlatillosTable'];
        $this->CategoriaPlatillos = TableRegistry::get('CategoriaPlatillos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CategoriaPlatillos);

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
