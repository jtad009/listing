<?php
use Migrations\AbstractSeed;

/**
 * Distributors seed.
 */
class DistributorsSeed extends AbstractSeed
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
                'id' => 'ebda2058-ec95-401b-b162-999fbed4d820',
                'first_name' => 'israel',
                'last_name' => 'edet',
                'email' => 'israeledet@skole.com.ng',
                'phone' => '0903243546',
                'seller_type' => 'Wholesaler',
                'business_name' => 'Etag',
                'business_location_city' => 'Lagos',
                'business_location_state' => 'Adamawa',
                'created' => '2020-04-06 18:49:24',
                'modified' => '2020-04-06 18:49:24',
            ],
        ];

        $rows = $this->fetchAll('SELECT * FROM distributors'); // returns PDOStatement
       
        if(count($rows) == 0){
            $table = $this->table('distributors');
            $table->insert($data)->save();
        }
    }
}
