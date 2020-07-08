<?php
namespace Directory\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Directory\Model\Table\ListingsTable;

/**
 * Directory\Model\Table\ListingsTable Test Case
 */
class ListingsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \Directory\Model\Table\ListingsTable
     */
    public $Listings;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.Directory.Listings',
        'plugin.Directory.States',
        'plugin.Directory.ListingImages',
        'plugin.Directory.ListingReviews',
        'plugin.Directory.ListingViews',
        'plugin.Directory.Categories',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Listings') ? [] : ['className' => ListingsTable::class];
        $this->Listings = TableRegistry::getTableLocator()->get('Listings', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Listings);

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
