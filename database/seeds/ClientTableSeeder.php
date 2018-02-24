<?php

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('clients')->insert(
            [
                'title'=>'Mr',
                'name'=>'Amir',
                'last_name'=>'Behvandi',
                'address'=>'Tehran Poonak',
                'zip_code'=>'021',
                'city'=>'Tehran',
                'state'=>'Tehran',
                'email'=>'amirbehvandi747@gmail.com'


            ]
        );

        DB::table('clients')->insert(
            [
                'title'=>'mrs',
                'name'=>'Saqar',
                'last_name'=>'Lhaje Amiri',
                'address'=>'Shams Abad',
                'zip_code'=>'021',
                'city'=>'Tehran',
                'state'=>'Tehran',
                'email'=>'Saqar@gmail.com'


            ]
        );
    }
}
