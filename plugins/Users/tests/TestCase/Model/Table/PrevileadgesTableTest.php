<?php
namespace Users\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Users\Model\Table\PrevileadgesTable;

/**
 * Users\Model\Table\PrevileadgesTable Test Case
 */
class PrevileadgesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \Users\Model\Table\PrevileadgesTable
     */
    public $Previleadges;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.Users.Previleadges',
        'plugin.Users.RolePrevileadges',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Previleadges') ? [] : ['className' => PrevileadgesTable::class];
        $this->Previleadges = TableRegistry::getTableLocator()->get('Previleadges', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Previleadges);

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
