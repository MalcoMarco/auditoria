<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EficienciasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EficienciasTable Test Case
 */
class EficienciasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EficienciasTable
     */
    public $Eficiencias;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.eficiencias',
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
        $config = TableRegistry::exists('Eficiencias') ? [] : ['className' => EficienciasTable::class];
        $this->Eficiencias = TableRegistry::get('Eficiencias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Eficiencias);

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
