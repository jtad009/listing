<?php
use Migrations\AbstractSeed;

/**
 * Countries seed.
 */
class CountriesSeed extends AbstractSeed
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
                'name' => 'Nigeria',
                'short' => 'NG',
                'created' => '2020-04-06 18:49:24',
            ],
        ];

        $rows = $this->fetchAll('SELECT * FROM countries'); // returns PDOStatement
       
        if(count($rows) == 0){
            $table = $this->table('countries');
            $table->insert($data)->save();
        }
    }
}
