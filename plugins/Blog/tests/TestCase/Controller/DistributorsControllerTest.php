<?php
namespace Blog\Test\TestCase\Controller;

use Blog\Controller\DistributorsController;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\Fixture\FixtureManager;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;
use Faker;
/**
 * Blog\Controller\DistributorsController Test Case
 *
 * @uses \Blog\Controller\DistributorsController
 */
class DistributorsControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.Blog.Distributors',
    ];

    public $faker;
    public $record = [
        'id' => '94639e0b-d7e3-45cf-9a2b-72907e26da13',
        'first_name' => 'Lorem ipsum dolor sit amet',
        'last_name' => 'Lorem ipsum dolor sit amet',
        'email' => '',
        'phone' => 'Lorem ipsum dolor ',
        'seller_type' => 'Lorem ipsum dolor sit amet',
        'business_name' => 'Lorem ipsum dolor sit amet',
        'business_location_city' => 'Lorem ipsum dolor sit amet',
        'business_location_state' => 'Lorem ipsum dolor sit amet',
        'created' => '2020-04-05',
        'modified' => '2020-04-05',
    ];
    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        // Set session data
    $this->session([
        'Auth' => [
            'User' => [
                'id' => 1,
                'username' => 'testing',
                // other keys.
            ]
        ]
    ]);
         $this->get('blog/distributors/index');
       
        $this->assertResponseOk();
        $this->viewVariable('distributors');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->session([
            'Auth' => [
                'User' => [
                    'id' => 1,
                    'username' => 'testing',
                    // other keys.
                ]
            ]
        ]);
        $this->get('blog/distributors/view/94639e0b-d7e3-45cf-9a2b-72907e26da13');
        $this->assertResponseOk();
        $this->viewVariable('distributors');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->enableCsrfToken();
        $this->faker = Faker\Factory::create();
        $this->record['id'] = $this->faker->uuid;
        $this->record['email'] = $this->faker->companyEmail;
        
        $this->post('apply-as-distributor', $this->record);
      
        $this->assertResponseSuccess();
        $articles = TableRegistry::getTableLocator()->get('Distributors');
        $query = $articles->find()->where(['email' => $this->record['email']]);
        // $this->assertEquals(1, $query->count());
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
