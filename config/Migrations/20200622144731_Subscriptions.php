<?php
use Migrations\AbstractMigration;

class Subscriptions extends AbstractMigration
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
        $this->table('subscriptions', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'uuid', [
                'default' => 'UUID()',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('email', 'string', [
                'default' => null,
                'limit' => 200,
                'null' => false,
            ])
            ->addColumn('created', 'timestamp', [
                'default' => '2020-04-06 18:49:24',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('email_id', 'string', [
                'default' => null,
                'limit' => 200,
                'null' => true,
            ])
            ->create();

        
    }
    /**
     * Drop Database
     * @return void
     */
    public function down()
    {
       
        $this->execute('DELETE FROM subscriptions');
    }
}
