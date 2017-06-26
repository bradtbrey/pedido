<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CocinerosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CocinerosTable Test Case
 */
class CocinerosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CocinerosTable
     */
    public $Cocineros;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cocineros',
        'app.platillos',
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
        $config = TableRegistry::exists('Cocineros') ? [] : ['className' => 'App\Model\Table\CocinerosTable'];
        $this->Cocineros = TableRegistry::get('Cocineros', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Cocineros);

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
