<?php
namespace Directory\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Directory\Model\Table\ListingReviewsTable;

/**
 * Directory\Model\Table\ListingReviewsTable Test Case
 */
class ListingReviewsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \Directory\Model\Table\ListingReviewsTable
     */
    public $ListingReviews;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.Directory.ListingReviews',
        'plugin.Directory.Listings',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ListingReviews') ? [] : ['className' => ListingReviewsTable::class];
        $this->ListingReviews = TableRegistry::getTableLocator()->get('ListingReviews', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ListingReviews);

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
