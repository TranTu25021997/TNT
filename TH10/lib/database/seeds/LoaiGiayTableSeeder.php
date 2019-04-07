<?php

use Illuminate\Database\Seeder;

class LoaiGiayTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$data = [
    	[
    		'loai_name'=>'Giày Nam',
    		'loai_slug'=>str_slug('Giày Nam')
    	],
    	[
    		'loai_name'=>'Giày Nữ',
    		'loai_slug'=> str_slug('Giày Nữ')
    	],
    	[
    		'loai_name'=>'Giày Trẻ Em',
    		'loai_slug'=>str_slug('Giày Trẻ Em')
    	],
    ];
    	
    	
        //
        DB::table('loaigiay')->insert($data);
    }
}
