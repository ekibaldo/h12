<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AdSlider3Table;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AdSlider3Table Test Case
 */
class AdSlider3TableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AdSlider3Table
     */
    public $AdSlider3;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ad_slider3'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AdSlider3') ? [] : ['className' => AdSlider3Table::class];
        $this->AdSlider3 = TableRegistry::get('AdSlider3', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AdSlider3);

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
