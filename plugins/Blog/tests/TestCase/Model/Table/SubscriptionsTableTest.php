<?php
namespace Blog\Test\TestCase\Model\Table;

use Blog\Model\Table\SubscriptionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * Blog\Model\Table\SubscriptionsTable Test Case
 */
class SubscriptionsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \Blog\Model\Table\SubscriptionsTable
     */
    public $Subscriptions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.Blog.Subscriptions',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Subscriptions') ? [] : ['className' => SubscriptionsTable::class];
        $this->Subscriptions = TableRegistry::getTableLocator()->get('Subscriptions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Subscriptions);

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

    /**
     * Test defaultConnectionName method
     *
     * @return void
     */
    public function testDefaultConnectionName()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
