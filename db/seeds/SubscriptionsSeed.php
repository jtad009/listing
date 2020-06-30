<?php
use Phinx\Seed\AbstractSeed;

/**
 * Subscriptions seed.
 */
class SubscriptionsSeed extends AbstractSeed
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
                'id' => '2770ae69-6a9e-4557-ae13-83a9c4eaa2ca',
                'email' => 'hello@skole.com.ca',
                'created' => '2020-06-04 10:26:43',
                'email_id' => '3a03903d833670c2242bdc29af9edeb4',
            ],
            [
                'id' => '46b34483-2a72-4248-aa44-1237facf1101',
                'email' => 'jesuss@yahoo.com',
                'created' => '2020-06-04 09:47:12',
                'email_id' => 'a859da61522c24dc347b0563ab0744f7',
            ],
            [
                'id' => '46b3581a-d2ba-475d-b2b4-1152e6c9b8b9',
                'email' => 'hello@skole.com.ng',
                'created' => '2020-06-04 10:25:52',
                'email_id' => '9d3158b70492170d5c41c45f99360e82',
            ],
        ];

        $rows = $this->fetchAll('SELECT * FROM subscriptions'); // returns PDOStatement
       
        if(count($rows) == 0){
            $table = $this->table('subscriptions');
            $table->insert($data)->save();
        }
    }
}
