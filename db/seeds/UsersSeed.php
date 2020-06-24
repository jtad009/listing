<?php
use Phinx\Seed\AbstractSeed;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
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
                'id' => '1',
                'username' => 'israeledet',
                'first_name' => 'israels',
                'last_name' => 'edet',
                'article_count' => '12',
                'created' => '2020-04-06 18:49:24',
                'bio' => 'An Enthusiat at heartss',
                'password' => '$2y$10$PPDLhEoSo9qkDYl3O5s.l.mDqf6CTo6saZITbQegZaL4qi/g4xSzS',
                'canWrite' => '0',
                'image' => '/var/www/html/webroot/DIVAPAD-6033c.png',
                'email' => 'israeledet@yahoo.com',
                'api_key' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJpc3JhZWxlZGV0IiwiaWF0IjoxNTkwMzMxMjE0LCJleHAiOjE1OTAzNjQ4MDB9.jyaBKLO3mYVGCKMDZbCz2Xyvg9RKj7Y7Qognof0nDGg',
            ],
            [
                'id' => '2',
                'username' => 'ruth',
                'first_name' => 'Life',
                'last_name' => 'Coco',
                'article_count' => '5',
                'created' => '2020-04-06 18:49:24',
                'bio' => 'A lifestyle blogger',
                'password' => '$2y$10$kumaUAsy.AeYneGJS134OO1KjN.cdkYCJKEfo20XKBVMryNieggtC',
                'canWrite' => '1',
                'image' => 'Skole-b8101.jpg',
                'email' => 'cocobasseyruth@gmail.com',
                'api_key' => '',
            ],
            [
                'id' => '3',
                'username' => 'precious_akah',
                'first_name' => 'Precious',
                'last_name' => 'Akah',
                'article_count' => '1',
                'created' => '2020-04-06 18:49:24',
                'bio' => 'I am great with children',
                'password' => '$2y$10$VEavU6Gsf/YuXf2ZxyhfUeJukgpwmPx7FZkD2VVKZbrCo5CQF1WCe',
                'canWrite' => '0',
                'image' => 'Skole-3c515.png',
                'email' => 'precious_akah@yahoo.com',
                'api_key' => '',
            ],
        ];

        
        $rows = $this->fetchAll('SELECT * FROM users'); // returns PDOStatement
       
        if(count($rows) == 0){
            $table = $this->table('users');
            $table->insert($data)->save();
        }
    }
}
