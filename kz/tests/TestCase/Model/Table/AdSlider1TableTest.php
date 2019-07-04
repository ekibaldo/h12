<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AdSlider1Table;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AdSlider1Table Test Case
 */
class AdSlider1TableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AdSlider1Table
     */
    public $AdSlider1;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ad_slider1'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AdSlider1') ? [] : ['className' => AdSlider1Table::class];
        $this->AdSlider1 = TableRegistry::get('AdSlider1', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AdSlider1);

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
