<?php

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
        // $this->call(UsersTableSeeder::class);
        // DB::table('companies')->insert([
        //     'name'=>'new company',
        //     'address'=>'nishin'
        // ]);
        DB::table('companies')->insert([
            'name'=>Str::random(10),
            'address'=>Str::random(10)
        ]);
    }
}
