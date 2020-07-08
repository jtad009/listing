<?php
namespace Directory\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Directory\Model\Table\ListingsCategoriesTable;

/**
 * Directory\Model\Table\ListingsCategoriesTable Test Case
 */
class ListingsCategoriesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \Directory\Model\Table\ListingsCategoriesTable
     */
    public $ListingsCategories;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.Directory.ListingsCategories',
        'plugin.Directory.Listings',
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
        $config = TableRegistry::getTableLocator()->exists('ListingsCategories') ? [] : ['className' => ListingsCategoriesTable::class];
        $this->ListingsCategories = TableRegistry::getTableLocator()->get('ListingsCategories', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ListingsCategories);

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
