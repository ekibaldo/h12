<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AdReviewsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AdReviewsTable Test Case
 */
class AdReviewsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AdReviewsTable
     */
    public $AdReviews;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ad_reviews'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AdReviews') ? [] : ['className' => AdReviewsTable::class];
        $this->AdReviews = TableRegistry::get('AdReviews', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AdReviews);

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
