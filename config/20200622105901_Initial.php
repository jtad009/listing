<?php
use Migrations\AbstractMigration;

class Initial extends AbstractMigration
{
    public function up()
    {

        

         }

    public function down()
    {
        $this->table('articles')->drop()->save();
        $this->table('articles_tags')->drop()->save();
        $this->table('categories')->drop()->save();
        $this->table('comments')->drop()->save();
        $this->table('countries')->drop()->save();
        $this->table('distributors')->drop()->save();
        $this->table('media')->drop()->save();
        $this->table('oauths')->drop()->save();
        $this->table('states')->drop()->save();
        $this->table('subscriptions')->drop()->save();
        $this->table('tags')->drop()->save();
        $this->table('users')->drop()->save();
    }
}
