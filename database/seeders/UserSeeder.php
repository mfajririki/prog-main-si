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
        User::create([
            'name' => 'Admin Sistem Informasi',
            'email' => 'adminsi@binadarma.ac.id',
            'password' => bcrypt('adminsiubd')
        ]);
    }
}
