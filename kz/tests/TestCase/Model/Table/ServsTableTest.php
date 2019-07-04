<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ServsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ServsTable Test Case
 */
class ServsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ServsTable
     */
    public $Servs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.servs',
        'app.states',
        'app.doctors'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Servs') ? [] : ['className' => ServsTable::class];
        $this->Servs = TableRegistry::get('Servs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Servs);

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
