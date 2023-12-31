<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['name' => 'Oluwatobi Solomon', 'email' => 'solotobby@gmail.com', 'password' => bcrypt('solomon001'), 'role' => 'admin', 'visitee_id' => 0]);
    }
}
