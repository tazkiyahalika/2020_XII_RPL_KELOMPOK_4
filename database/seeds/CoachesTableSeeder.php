<?php

use Illuminate\Database\Seeder;

class CoachesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	 DB::table('coaches')->insert([
            'coc_id' 	    => '1',
            'coc_name'      => 'Eman Sulaeman',
        	'coc_gender'    => 'Laki - Laki',
        	'coc_esc_id'    => '1'
        ]);

    	 DB::table('coaches')->insert([
            'coc_id' 	 => '2',
            'coc_name'   => 'Annisa Komalasari',
        	'coc_gender' => 'Perempuan',
        	'coc_esc_id' => '2'
        ]);

    	 DB::table('coaches')->insert([
            'coc_id' 	 => '3',
            'coc_name'   => 'Dede Suryana',
        	'coc_gender' => 'Laki - Laki',
        	'coc_esc_id' => '3'
        ]);

    	 DB::table('coaches')->insert([
            'coc_id' 	 => '4',
            'coc_name'   => 'Yusuf Maulana Arifin',
        	'coc_gender' => 'Laki - Laki',
        	'coc_esc_id' => '4'
        ]);

    	 DB::table('coaches')->insert([
            'coc_id' 	 => '5',
            'coc_name'   => 'Cucun',
        	'coc_gender' => 'Laki - Laki',
        	'coc_esc_id' => '5'
        ]);

    	 DB::table('coaches')->insert([
            'coc_id' 	 => '6',
            'coc_name'   => 'Yadi',
        	'coc_gender' => 'Laki - Laki',
        	'coc_esc_id' => '6'
        ]);

    	 DB::table('coaches')->insert([
            'coc_id' 	 => '7',
            'coc_name'   => 'Hasmi',
        	'coc_gender' => 'Laki - Laki',
        	'coc_esc_id' => '7'
        ]);

    	 DB::table('coaches')->insert([
            'coc_id' 	 => '8',
            'coc_name'   => 'Hilman',
        	'coc_gender' => 'Laki - Laki',
        	'coc_esc_id' => '8'
        ]);

    	 DB::table('coaches')->insert([
            'coc_id' 	 => '9',
            'coc_name'   => 'Aang',
        	'coc_gender' => 'Laki - Laki',
        	'coc_esc_id' => '9'
        ]);
    }
}
