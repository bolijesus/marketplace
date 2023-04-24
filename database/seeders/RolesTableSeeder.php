<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'created_at' => '2023-02-19 14:09:51',
                'display_name' => 'Administrator',
                'id' => 1,
                'name' => 'admin',
                'updated_at' => '2023-02-19 14:09:51',
            ),
            1 => 
            array (
                'created_at' => '2023-02-19 14:09:51',
                'display_name' => 'Normal User',
                'id' => 2,
                'name' => 'user',
                'updated_at' => '2023-02-19 14:09:51',
            ),
        ));
        
        
    }
}