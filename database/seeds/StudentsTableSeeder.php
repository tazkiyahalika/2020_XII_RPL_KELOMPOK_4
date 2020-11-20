<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('students')->insert([
            'std_id' 	 => '1',
            'std_nis'    => '1819.10.070',
            'std_name'	 => 'Rismawati',
        	'std_gender' => 'Perempuan',
        	'std_class'	 => 'xii rekayasa perangkat lunak 2',
        	'std_address' => 'Landean',
        	'std_coc_id' => '1',
        	'std_esc_id' => '1'
        ]);

         DB::table('students')->insert([
            'std_id' 	 => '2',
            'std_nis'    => '1819.10.031',
            'std_name'	 => 'Elsa Lusiani',
        	'std_gender' => 'perempuan',
        	'std_class'	 => 'xii rekayasa perangkat lunak 2',
        	'std_address' => 'Bojong',
        	'std_coc_id' => '6',
        	'std_esc_id' => '6'
        ]);

         DB::table('students')->insert([
            'std_id' 	 => '3',
            'std_nis'    => '1819.10.005',
            'std_name'	 => 'Alika Tazkiyah',
        	'std_gender' => 'perempuan',
        	'std_class'	 => 'xii rekayasa perangkat lunak 1',
        	'std_address' => 'junti',
        	'std_coc_id' => '1',
        	'std_esc_id' => '1'
        ]);

         DB::table('students')->insert([
            'std_id' 	 => '4',
            'std_nis'    => '1819.10.072',
            'std_name'	 => 'Rizki Muhammad M',
        	'std_gender' => 'Laki - Laki',
        	'std_class'	 => 'xii rekayasa perangkat lunak 2',
        	'std_address' => 'Bojong',
        	'std_coc_id' => '2',
        	'std_esc_id' => '2'
        ]);

         DB::table('students')->insert([
            'std_id' 	 => '5',
            'std_nis'    => '1819.10.012',
            'std_name'	 => 'Asiah Nurjanah',
        	'std_gender' => 'Perempuan',
        	'std_class'	 => 'xii rekayasa perangkat lunak 2',
        	'std_address' => 'Cangkudu',
        	'std_coc_id' => '3',
        	'std_esc_id' => '3'
        ]);
    }
}
