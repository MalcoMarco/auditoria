<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PortabilidadesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PortabilidadesTable Test Case
 */
class PortabilidadesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PortabilidadesTable
     */
    public $Portabilidades;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.portabilidades',
        'app.empresas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Portabilidades') ? [] : ['className' => PortabilidadesTable::class];
        $this->Portabilidades = TableRegistry::get('Portabilidades', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Portabilidades);

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
