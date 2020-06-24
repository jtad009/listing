<?php
namespace App\Test\TestCase\Controller\Component;

use App\Controller\Component\MailChimpComponent;
use Cake\Controller\ComponentRegistry;
use Cake\Http\Response;
use Cake\Http\ServerRequest;
use Cake\TestSuite\TestCase;
use Faker;

/**
 * App\Controller\Component\MailChimpComponent Test Case
 */
class MailChimpComponentTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Controller\Component\MailChimpComponent
     */
    public $MailChimp;
    public $contactId = 'e586d6051fc831346d61ddb90eb36bac';
    public $faker;
    public $email;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->faker = Faker\Factory::create();

        $registry = new ComponentRegistry();
        $this->MailChimp = new MailChimpComponent($registry);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MailChimp);

        parent::tearDown();
    }

    /**
     * Test add contact to mailchimp
     *
     * @return void
     */
    public function testAddContact()
    {
        $this->email = $this->faker->companyEmail;
        $response = $this->MailChimp->addContact($this->email);
        $this->assertArrayHasKey('email_address', $response);
        $this->assertEquals($response['email_address'], $this->email);
    }

    /**
     * Test update contact details
     *
     * @return void
     */
    // public function testUpdateContact()
    // {
    //     $this->email = $this->faker->companyEmail;
    //     $this->contactId = '4983e6809be01d81c337ff890f9360b7';
    //     $response = $this->MailChimp->updateContact($this->contactId,$this->email);

    //    $this->assertArrayHasKey('email_address', $response);
    //     $this->assertEquals($response['id'],$this->contactId);
    //     $this->assertEquals($response['email_address'],$this->email);
    // }
}
