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
                'id' => 1,
                'name' => 'Hasnain Sadid',
                'email' => 'admin@wanitbd.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$xxa14NTFaIn6JdZkFfhN9ePVgwA/hNytroyZFhgX6ich9pu5oiLxC',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'remember_token' => 'J5AhZqFilbKdrXdTAAKRS6GM1HMRx35DqGbduLAIr3wpO1Aa4v9FJVT3CrAw',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2025-11-08 09:05:43',
                'updated_at' => '2025-11-08 09:05:43',
            ),
        ));
        
        
    }
}