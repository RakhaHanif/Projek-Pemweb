<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Admin::insert([
            [
                'name'  => 'Administrator',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('123')
            ],
        ]);
    }
}
