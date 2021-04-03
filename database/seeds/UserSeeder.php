<?php

use App\User;
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
        $admin = User::create([
            'name' => 'Saya Admin',
            'email' => 'admin@movie.review',
            'password' => bcrypt('12345678')
        ]);
        $admin->assignRole('admin');

        $author = User::create([
            'name' => 'Saya Author',
            'email' => 'author@movie.review',
            'password' => bcrypt('12345678')
        ]);
        $admin->assignRole('author');
    }
}
