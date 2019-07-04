<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AdSlider2Table;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AdSlider2Table Test Case
 */
class AdSlider2TableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AdSlider2Table
     */
    public $AdSlider2;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ad_slider2'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AdSlider2') ? [] : ['className' => AdSlider2Table::class];
        $this->AdSlider2 = TableRegistry::get('AdSlider2', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AdSlider2);

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
