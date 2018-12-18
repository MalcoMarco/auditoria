<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SeguridadesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SeguridadesTable Test Case
 */
class SeguridadesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SeguridadesTable
     */
    public $Seguridades;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.seguridades',
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
        $config = TableRegistry::exists('Seguridades') ? [] : ['className' => SeguridadesTable::class];
        $this->Seguridades = TableRegistry::get('Seguridades', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Seguridades);

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
