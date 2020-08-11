<?php

use App\User;
use App\Reply;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(Reply::class, 14)->create();

        User::insert([
            'name' => 'Rale',
            'email' => 'rale.todorovic2@gmail.com',
            'password' => Hash::make('rastko123'),
        ]);
    }
}
