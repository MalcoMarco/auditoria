<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FiabilidadesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FiabilidadesTable Test Case
 */
class FiabilidadesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FiabilidadesTable
     */
    public $Fiabilidades;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.fiabilidades',
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
        $config = TableRegistry::exists('Fiabilidades') ? [] : ['className' => FiabilidadesTable::class];
        $this->Fiabilidades = TableRegistry::get('Fiabilidades', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Fiabilidades);

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
