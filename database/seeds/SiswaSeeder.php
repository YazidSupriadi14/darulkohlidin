<?php

use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('siswa')->insert([
        	'name' => 'abdul barri',
        	'nisn' => '0038767274',
        	'nis' => '181910001',
            'noskl'=>'3.521/001/SMA IT DK/SKL/V/2021',
        	'tmp_lahir' => 'jakarta',
            'tgl_lahir' => '2003-01-02',
            'status' => 'lulus',
            'user_id' => null,
            
        ],[
        	'name' => 'ABDUL SYUKUR ',
        	'nisn' => '0031139662',
        	'nis' => '181910004',
            'noskl'=>'3.521/001/SMA IT DK/SKL/V/2021',
        	'tmp_lahir' => 'Depok',
            'tgl_lahir' => '2003-02-21',
            'status' => 'lulus',
            'user_id' => null,
            
        ]);
    }
}
