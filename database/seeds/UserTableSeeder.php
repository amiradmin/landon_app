<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert(
            [
                'name'=>'admin',
                'email'=>'amirbehvandi747@gmail.com',
                'password'=>bcrypt('123456789')
            ]
        );
    }
}
