<?php
use Phinx\Seed\AbstractSeed;

/**
 * Oauths seed.
 */
class OauthsSeed extends AbstractSeed
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
        ];

        $rows = $this->fetchAll('SELECT * FROM oauths'); // returns PDOStatement
       
        if(count($rows) == 0){
            $table = $this->table('oauths');
            $table->insert($data)->save();
        }
        
    }
}
