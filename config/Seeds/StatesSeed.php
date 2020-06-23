<?php
use Migrations\AbstractSeed;

/**
 * States seed.
 */
class StatesSeed extends AbstractSeed
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
                'states' => 'Abia',
                'county_code' => '1',
            ],
            [
                'id' => '2',
                'states' => 'Abuja FCT',
                'county_code' => '1',
            ],
            [
                'id' => '3',
                'states' => 'Adamawa',
                'county_code' => '1',
            ],
        ];

        $rows = $this->fetchAll('SELECT * FROM states'); // returns PDOStatement
       
        if(count($rows) == 0){
            $table = $this->table('states');
            $table->insert($data)->save();
        }
    }
}
