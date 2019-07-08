<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AdFaqTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AdFaqTable Test Case
 */
class AdFaqTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AdFaqTable
     */
    public $AdFaq;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ad_faq'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AdFaq') ? [] : ['className' => AdFaqTable::class];
        $this->AdFaq = TableRegistry::get('AdFaq', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AdFaq);

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
