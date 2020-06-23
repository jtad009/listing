<?php
use Migrations\AbstractSeed;

/**
 * Comments seed.
 */
class CommentsSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => '0839a9c7-5551-4a58-a3d3-167647eda857',
                'article_id' => 'ec3c5978-88ac-11e9-85d0-f0761cc3045a',
                'comment' => '????????',
                'published' => '0',
                'name' => 'Emem Akah',
                'email' => '',
                'website' => '',
                'created' => '2019-07-08 16:51:05',
                'modified' => '2019-07-08 16:51:05',
            ],
            [
                'id' => '1bfb5c2f-560a-4998-9397-e310271f5022',
                'article_id' => 'c84f2d62-4d4f-49a0-be83-93a1b701a117',
                'comment' => 'This piece has been insightful. Thanks ',
                'published' => '0',
                'name' => 'Mr Eddy Jacobs',
                'email' => '',
                'website' => '',
                'created' => '2019-07-08 10:18:02',
                'modified' => '2019-07-08 10:18:02',
            ],
            [
                'id' => '22123015-9529-4d06-b98e-2b3d74438a7d',
                'article_id' => '01b6ea24-233b-4613-80f4-bc24ab46f364',
                'comment' => 'Hello there ',
                'published' => '0',
                'name' => 'Micky ',
                'email' => 'hello@skole.com',
                'website' => 'blog.skole.com.ng',
                'created' => '2020-01-09 13:51:03',
                'modified' => '2020-01-09 13:51:03',
            ],
        ];

        $rows = $this->fetchAll('SELECT * FROM comments'); // returns PDOStatement
       
        if(count($rows) == 0){
            $table = $this->table('comments');
            $table->insert($data)->save();
        }
    }
}
