<?php
use Migrations\AbstractMigration;

class Oauths extends AbstractMigration
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
        $this->table('oauths', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'uuid', [
                'default' => 'UUID()',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('short_token', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('long_token', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('refresh_token', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created', 'timestamp', [
                'default' => '2020-04-06 18:49:24',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified', 'timestamp', [
                'default' => '2020-04-06 18:49:24',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('userId', 'uuid', [
                'default' => 'UUID()',
                'limit' => 200,
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
        $this->execute('DELETE FROM oauths');
    }
}
