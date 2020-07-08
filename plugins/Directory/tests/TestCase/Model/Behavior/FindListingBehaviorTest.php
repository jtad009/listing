<?php
namespace Directory\Test\TestCase\Model\Behavior;

use Cake\TestSuite\TestCase;
use Directory\Model\Behavior\FindListingBehavior;

/**
 * Directory\Model\Behavior\FindListingBehavior Test Case
 */
class FindListingBehaviorTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \Directory\Model\Behavior\FindListingBehavior
     */
    public $FindListing;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->FindListing = new FindListingBehavior();
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FindListing);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
