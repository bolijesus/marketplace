<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'created_at' => '2023-02-19 14:09:51',
                'id' => 1,
                'name' => 'Category 1',
                'order' => 1,
                'parent_id' => NULL,
                'slug' => 'category-1',
                'updated_at' => '2023-02-19 14:09:51',
            ),
            1 => 
            array (
                'created_at' => '2023-02-19 14:09:51',
                'id' => 2,
                'name' => 'Category 2',
                'order' => 1,
                'parent_id' => NULL,
                'slug' => 'category-2',
                'updated_at' => '2023-02-19 14:09:51',
            ),
        ));
        
        
    }
}