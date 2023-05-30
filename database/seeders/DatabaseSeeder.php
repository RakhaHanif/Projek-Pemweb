<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // post::create([
        //     'name' => 'Rakha Hanif',
        //     'email' => 'rakhahanif21@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        // Category::create([
        //     'name' => 'Web Programming',
        //     'slug' => 'web-programming'
        // ]);
        
        User::create([
            'name' => 'asdas',
            'email'=> 'adonds@gmail.com',
            'phone' => '19873289',
            'password' => 'oujbaduifbiadbf'
        ]);
    }
}
