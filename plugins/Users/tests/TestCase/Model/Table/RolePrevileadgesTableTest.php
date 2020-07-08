<?php
namespace Users\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Users\Model\Table\RolePrevileadgesTable;

/**
 * Users\Model\Table\RolePrevileadgesTable Test Case
 */
class RolePrevileadgesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \Users\Model\Table\RolePrevileadgesTable
     */
    public $RolePrevileadges;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.Users.RolePrevileadges',
        'plugin.Users.Previleadges',
        'plugin.Users.Roles',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('RolePrevileadges') ? [] : ['className' => RolePrevileadgesTable::class];
        $this->RolePrevileadges = TableRegistry::getTableLocator()->get('RolePrevileadges', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RolePrevileadges);

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
