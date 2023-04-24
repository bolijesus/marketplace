<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'created_at' => '2023-02-19 14:09:51',
                'id' => 1,
                'name' => 'admin',
                'updated_at' => '2023-02-19 14:09:51',
            ),
        ));
        
        
    }
}