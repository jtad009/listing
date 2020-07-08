<?php
namespace Directory\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Directory\Model\Table\ListingViewsTable;

/**
 * Directory\Model\Table\ListingViewsTable Test Case
 */
class ListingViewsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \Directory\Model\Table\ListingViewsTable
     */
    public $ListingViews;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.Directory.ListingViews',
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
        $config = TableRegistry::getTableLocator()->exists('ListingViews') ? [] : ['className' => ListingViewsTable::class];
        $this->ListingViews = TableRegistry::getTableLocator()->get('ListingViews', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ListingViews);

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
