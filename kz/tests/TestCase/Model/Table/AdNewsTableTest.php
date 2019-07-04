<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AdNewsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AdNewsTable Test Case
 */
class AdNewsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AdNewsTable
     */
    public $AdNews;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ad_news'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AdNews') ? [] : ['className' => AdNewsTable::class];
        $this->AdNews = TableRegistry::get('AdNews', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AdNews);

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
