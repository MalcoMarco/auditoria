<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CompatitibilidadesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CompatitibilidadesTable Test Case
 */
class CompatitibilidadesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CompatitibilidadesTable
     */
    public $Compatitibilidades;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.compatitibilidades',
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
        $config = TableRegistry::exists('Compatitibilidades') ? [] : ['className' => CompatitibilidadesTable::class];
        $this->Compatitibilidades = TableRegistry::get('Compatitibilidades', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Compatitibilidades);

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
