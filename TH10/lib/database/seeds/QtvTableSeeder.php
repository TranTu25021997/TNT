<?php

use Illuminate\Database\Seeder;

class QtvTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
        	[
        		'email'=>'quantrivien@gmail.com',
        		'password'=>bcrypt(123456),
        		
        	],
        	[
        		'email'=>'quantrivien1@gmail.com',
        		'password'=>bcrypt(123456),
        		
        	],
        ];
        DB::table('quantrivien')->insert($data);
    }
}
