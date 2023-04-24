<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'created_at' => '2023-02-19 14:09:51',
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'updated_at' => '2023-02-19 14:09:51',
            ),
            1 => 
            array (
                'created_at' => '2023-02-19 14:09:51',
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'updated_at' => '2023-02-19 14:09:51',
            ),
            2 => 
            array (
                'created_at' => '2023-02-19 14:09:51',
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'updated_at' => '2023-02-19 14:09:51',
            ),
            3 => 
            array (
                'created_at' => '2023-02-19 14:09:51',
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'updated_at' => '2023-02-19 14:09:51',
            ),
            4 => 
            array (
                'created_at' => '2023-02-19 14:09:51',
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'updated_at' => '2023-02-19 14:09:51',
            ),
            5 => 
            array (
                'created_at' => '2023-02-19 14:09:51',
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'updated_at' => '2023-02-19 14:09:51',
            ),
            6 => 
            array (
                'created_at' => '2023-02-19 14:09:51',
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'updated_at' => '2023-02-19 14:09:51',
            ),
            7 => 
            array (
                'created_at' => '2023-02-19 14:09:51',
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'updated_at' => '2023-02-19 14:09:51',
            ),
            8 => 
            array (
                'created_at' => '2023-02-19 14:09:51',
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'updated_at' => '2023-02-19 14:09:51',
            ),
            9 => 
            array (
                'created_at' => '2023-02-19 14:09:51',
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'updated_at' => '2023-02-19 14:09:51',
            ),
            10 => 
            array (
                'created_at' => '2023-02-19 14:09:51',
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'updated_at' => '2023-02-19 14:09:51',
            ),
            11 => 
            array (
                'created_at' => '2023-02-19 14:09:51',
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'updated_at' => '2023-02-19 14:09:51',
            ),
            12 => 
            array (
                'created_at' => '2023-02-19 14:09:51',
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'updated_at' => '2023-02-19 14:09:51',
            ),
            13 => 
            array (
                'created_at' => '2023-02-19 14:09:51',
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'updated_at' => '2023-02-19 14:09:51',
            ),
            14 => 
            array (
                'created_at' => '2023-02-19 14:09:51',
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'updated_at' => '2023-02-19 14:09:51',
            ),
            15 => 
            array (
                'created_at' => '2023-02-19 14:09:51',
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'updated_at' => '2023-02-19 14:09:51',
            ),
            16 => 
            array (
                'created_at' => '2023-02-19 14:09:51',
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'updated_at' => '2023-02-19 14:09:51',
            ),
            17 => 
            array (
                'created_at' => '2023-02-19 14:09:51',
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'updated_at' => '2023-02-19 14:09:51',
            ),
            18 => 
            array (
                'created_at' => '2023-02-19 14:09:51',
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'updated_at' => '2023-02-19 14:09:51',
            ),
            19 => 
            array (
                'created_at' => '2023-02-19 14:09:51',
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'updated_at' => '2023-02-19 14:09:51',
            ),
            20 => 
            array (
                'created_at' => '2023-02-19 14:09:51',
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'updated_at' => '2023-02-19 14:09:51',
            ),
            21 => 
            array (
                'created_at' => '2023-02-19 14:09:51',
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'updated_at' => '2023-02-19 14:09:51',
            ),
            22 => 
            array (
                'created_at' => '2023-02-19 14:09:51',
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'updated_at' => '2023-02-19 14:09:51',
            ),
            23 => 
            array (
                'created_at' => '2023-02-19 14:09:51',
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'updated_at' => '2023-02-19 14:09:51',
            ),
            24 => 
            array (
                'created_at' => '2023-02-19 14:09:51',
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'updated_at' => '2023-02-19 14:09:51',
            ),
            25 => 
            array (
                'created_at' => '2023-02-19 14:09:51',
                'id' => 26,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'updated_at' => '2023-02-19 14:09:51',
            ),
            26 => 
            array (
                'created_at' => '2023-02-19 14:09:51',
                'id' => 27,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'updated_at' => '2023-02-19 14:09:51',
            ),
            27 => 
            array (
                'created_at' => '2023-02-19 14:09:51',
                'id' => 28,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'updated_at' => '2023-02-19 14:09:51',
            ),
            28 => 
            array (
                'created_at' => '2023-02-19 14:09:51',
                'id' => 29,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'updated_at' => '2023-02-19 14:09:51',
            ),
            29 => 
            array (
                'created_at' => '2023-02-19 14:09:51',
                'id' => 30,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'updated_at' => '2023-02-19 14:09:51',
            ),
            30 => 
            array (
                'created_at' => '2023-02-19 14:09:51',
                'id' => 31,
                'key' => 'browse_posts',
                'table_name' => 'posts',
                'updated_at' => '2023-02-19 14:09:51',
            ),
            31 => 
            array (
                'created_at' => '2023-02-19 14:09:51',
                'id' => 32,
                'key' => 'read_posts',
                'table_name' => 'posts',
                'updated_at' => '2023-02-19 14:09:51',
            ),
            32 => 
            array (
                'created_at' => '2023-02-19 14:09:51',
                'id' => 33,
                'key' => 'edit_posts',
                'table_name' => 'posts',
                'updated_at' => '2023-02-19 14:09:51',
            ),
            33 => 
            array (
                'created_at' => '2023-02-19 14:09:51',
                'id' => 34,
                'key' => 'add_posts',
                'table_name' => 'posts',
                'updated_at' => '2023-02-19 14:09:51',
            ),
            34 => 
            array (
                'created_at' => '2023-02-19 14:09:51',
                'id' => 35,
                'key' => 'delete_posts',
                'table_name' => 'posts',
                'updated_at' => '2023-02-19 14:09:51',
            ),
            35 => 
            array (
                'created_at' => '2023-02-19 14:09:51',
                'id' => 36,
                'key' => 'browse_pages',
                'table_name' => 'pages',
                'updated_at' => '2023-02-19 14:09:51',
            ),
            36 => 
            array (
                'created_at' => '2023-02-19 14:09:51',
                'id' => 37,
                'key' => 'read_pages',
                'table_name' => 'pages',
                'updated_at' => '2023-02-19 14:09:51',
            ),
            37 => 
            array (
                'created_at' => '2023-02-19 14:09:51',
                'id' => 38,
                'key' => 'edit_pages',
                'table_name' => 'pages',
                'updated_at' => '2023-02-19 14:09:51',
            ),
            38 => 
            array (
                'created_at' => '2023-02-19 14:09:51',
                'id' => 39,
                'key' => 'add_pages',
                'table_name' => 'pages',
                'updated_at' => '2023-02-19 14:09:51',
            ),
            39 => 
            array (
                'created_at' => '2023-02-19 14:09:51',
                'id' => 40,
                'key' => 'delete_pages',
                'table_name' => 'pages',
                'updated_at' => '2023-02-19 14:09:51',
            ),
            40 => 
            array (
                'created_at' => '2023-04-23 23:25:03',
                'id' => 41,
                'key' => 'browse_orders',
                'table_name' => 'orders',
                'updated_at' => '2023-04-23 23:25:03',
            ),
            41 => 
            array (
                'created_at' => '2023-04-23 23:25:03',
                'id' => 42,
                'key' => 'read_orders',
                'table_name' => 'orders',
                'updated_at' => '2023-04-23 23:25:03',
            ),
            42 => 
            array (
                'created_at' => '2023-04-23 23:25:03',
                'id' => 43,
                'key' => 'edit_orders',
                'table_name' => 'orders',
                'updated_at' => '2023-04-23 23:25:03',
            ),
            43 => 
            array (
                'created_at' => '2023-04-23 23:25:03',
                'id' => 44,
                'key' => 'add_orders',
                'table_name' => 'orders',
                'updated_at' => '2023-04-23 23:25:03',
            ),
            44 => 
            array (
                'created_at' => '2023-04-23 23:25:03',
                'id' => 45,
                'key' => 'delete_orders',
                'table_name' => 'orders',
                'updated_at' => '2023-04-23 23:25:03',
            ),
        ));
        
        
    }
}