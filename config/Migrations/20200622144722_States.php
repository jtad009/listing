<?php
use Migrations\AbstractMigration;

class States extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $this->table('states')
            ->addColumn('states', 'string', [
                'default' => null,
                'limit' => 200,
                'null' => false,
            ])
            ->addColumn('county_code', 'integer', [
                'default' => '1',
                'limit' => 11,
                'null' => false,
            ])
            ->create();

        
    }
    /**
     * Drop Database
     * @return void
     */
    public function down()
    {
        
        $this->execute('DELETE FROM states');
    }
}
