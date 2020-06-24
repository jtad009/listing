<?php
namespace Blog\Test\TestCase\Controller;

use Blog\Controller\ArticlesController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;
use Faker;
use Cake\ORM\TableRegistry;

/**
 * Blog\Controller\ArticlesController Test Case
 *
 * @uses \Blog\Controller\ArticlesController
 */
class ArticlesControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.Blog.Articles',
    ];
    public $faker;
    public $record =  [
        
            'id' => 'f1d8dba0-3f75-4258-a80e-2e07db05842c',
            'category_id' => 1,
            'title' => 'Lorem ipsum dolor sit amet',
            'slug' => 'Lorem-ipsum-dolor-sit-amet',
            'article' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'published' => 1,
            'comment_count' => 1,
            'view_count' => 1,
            'user_id' => 1,
            'created' => 1592998859,
            'modified' => 1592998859,
            'cover_image' => 'Lorem ipsum dolor sit amet',
        
    ];
    public function setUp()
    {
        $this->session([
            'Auth' => [
                'User' => [
                    'id' => 1,
                    'username' => 'testing',
                    'canWrite'=>1,
                    // other keys.
                ]
            ]
        ]);
    }
    /**
     * Test isAuthorized method
     *
     * @return void
     */
    public function testIsAuthorized()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test beforeFilter method
     *
     * @return void
     */
    public function testBeforeFilter()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test comments method
     *
     * @return void
     */
    public function testComments()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test tags method
     *
     * @return void
     */
    public function testTags()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test category method
     *
     * @return void
     */
    public function testCategory()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test numberofTimeTagisUsed method
     *
     * @return void
     */
    public function testNumberofTimeTagisUsed()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->get('blog/');
       
        $this->assertResponseOk();
        $this->viewVariable('acticles');
        $this->viewVariable('c');
        $this->viewVariable('response');
        $this->viewVariable('pages');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->get('blog/articles/Lorem-ipsum-dolor-sit-amet');
       
        $this->assertResponseOk();
        $this->viewVariable('acticle');
        $this->viewVariable('response');
       
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
        $this->record['slug'] = $this->faker->companyEmail;
        
        $this->post('articles/add', $this->record);
      
        $this->assertResponseSuccess();
        $articles = TableRegistry::getTableLocator()->get('Articles');
        $query = $articles->find()->where(['id' => $this->record['id']]);
        $this->assertEquals(1, $query->count());
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
     * Test getTagIdsAndDelete method
     *
     * @return void
     */
    public function testGetTagIdsAndDelete()
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

    /**
     * Test similar method
     *
     * @return void
     */
    public function testSimilar()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test upload method
     *
     * @return void
     */
    public function testUpload()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
