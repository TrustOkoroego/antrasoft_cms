<?php

use Illuminate\Database\Seeder;
use App\antrasoft\models\Privilege;
class PrivilegeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $actype = new Privilege();
        $actype->pr_name='can_write_post';
        $actype->pr_description ='Can write a new Post';
        $actype->save();

        $actype = new Privilege();
        $actype->pr_name='can_write_post';
        $actype->pr_description ='Can write create a Post';
        $actype->save();

        $actype = new Privilege();
        $actype->pr_name='can_manage_users';
        $actype->pr_description ='management of user accounts';
        $actype->save();

        /* for ecommers site
           $actype = new Privilege();
           $actype->pr_name='can_add_stock';
           $actype->pr_description ='can add new stock';
           $actype->save();
         */


    }
}
