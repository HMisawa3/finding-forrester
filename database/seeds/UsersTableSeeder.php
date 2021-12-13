<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         factory(User::class)->create([
            'name' => 'test',
            'email' => 'test@gmail.com',
            'password' => bcrypt('testtest')
         ]);


         factory(User::class, 9)->create();
    }
}
