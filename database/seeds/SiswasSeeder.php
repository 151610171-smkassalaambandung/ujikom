<?php

use Illuminate\Database\Seeder;

class SiswasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('siswa')->insert(
        	[
        		[
        			'nama'			=> 'Junay',
        			'kelas'		=> 'XII',
        			'jurusan'	=> 'RPL'
        		]
        	]);
    }
}
