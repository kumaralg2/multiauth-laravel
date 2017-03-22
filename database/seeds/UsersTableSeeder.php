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
        $user = new user();
        $user -> name = "Kiran Kumar";
        $user -> email = "k@gmail.com";
        $user -> password = crypt("secret","");
        $user -> save();
    }
}
