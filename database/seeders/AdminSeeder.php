<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Admin pertama
        $admin1 = Admin::create([
            'nama' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'foto' => 'default.png',
        ]);
        $admin1->assignRole('admin');

        // Admin kedua
        $admin2 = Admin::create([
            'nama' => 'Admin',
            'email' => 'bagasbawazir@gmail.com',
            'password' => bcrypt('password'),
            'foto' => 'default.png',
        ]);
        $admin2->assignRole('admin');
    }
}
