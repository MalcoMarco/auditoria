<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsabilidadesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsabilidadesTable Test Case
 */
class UsabilidadesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UsabilidadesTable
     */
    public $Usabilidades;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.usabilidades',
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
        $config = TableRegistry::exists('Usabilidades') ? [] : ['className' => UsabilidadesTable::class];
        $this->Usabilidades = TableRegistry::get('Usabilidades', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Usabilidades);

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
