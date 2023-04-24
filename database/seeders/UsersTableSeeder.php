<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'avatar' => 'users/default.png',
                'created_at' => '2023-02-19 14:09:51',
                'email' => 'admin@admin.com',
                'email_verified_at' => NULL,
                'id' => 1,
                'name' => 'Admin',
                'password' => '$2y$10$YXuUeln/vEeFQNGJXDZ7Su185JjO80hsey9jKH7GstT9PxouXbcJa',
                'remember_token' => 'wCUCrakbfDT7sudRDjoQeFexINHDNGvErya1mfjS61WOoh5gt2mFt8rqX0Nm',
                'role_id' => 1,
                'settings' => NULL,
                'updated_at' => '2023-02-19 14:09:51',
            ),
            1 => 
            array (
                'avatar' => 'users/default.png',
                'created_at' => '2023-02-22 03:45:34',
                'email' => 'user@user.com',
                'email_verified_at' => NULL,
                'id' => 2,
                'name' => 'JesusDavid  BolivarNoguera',
                'password' => '$2y$10$Sr6Hbr9n6zE6ftSMGmE1FOY.bnppGai6IDhKHATK4/l2TafT7l5Sa',
                'remember_token' => NULL,
                'role_id' => 2,
                'settings' => NULL,
                'updated_at' => '2023-02-22 03:45:34',
            ),
        ));
        
        
    }
}