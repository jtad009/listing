<?php
namespace Directory\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Directory\Model\Table\ListingImagesTable;

/**
 * Directory\Model\Table\ListingImagesTable Test Case
 */
class ListingImagesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \Directory\Model\Table\ListingImagesTable
     */
    public $ListingImages;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.Directory.ListingImages',
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
        $config = TableRegistry::getTableLocator()->exists('ListingImages') ? [] : ['className' => ListingImagesTable::class];
        $this->ListingImages = TableRegistry::getTableLocator()->get('ListingImages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ListingImages);

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
