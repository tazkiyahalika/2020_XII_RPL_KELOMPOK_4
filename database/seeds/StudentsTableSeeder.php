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
            'std_usr_id' => '1',
        	'std_gender' => 'Perempuan',
        	'std_class'	 => 'xii rekayasa perangkat lunak 2',
        	'std_address' => 'Landean'
        ]);

         DB::table('students')->insert([
            'std_id' 	 => '2',
            'std_usr_id' => '2',
        	'std_gender' => 'perempuan',
        	'std_class'	 => 'xii rekayasa perangkat lunak 2',
        	'std_address' => 'Bojong'
        ]);

         DB::table('students')->insert([
            'std_id' 	 => '3',
            'std_usr_id' => '3',
        	'std_gender' => 'perempuan',
        	'std_class'	 => 'xii rekayasa perangkat lunak 1',
        	'std_address' => 'juntihilir'
        ]);

         DB::table('students')->insert([
            'std_id' 	 => '4',
            'std_usr_id' => '4',
        	'std_gender' => 'Laki - Laki',
        	'std_class'	 => 'xii rekayasa perangkat lunak 2',
        	'std_address' => 'cibogo'
        ]);

         DB::table('students')->insert([
            'std_id' 	 => '5',
            'std_usr_id' => '5',
        	'std_gender' => 'Perempuan',
        	'std_class'	 => 'xii rekayasa perangkat lunak 2',
        	'std_address' => 'Cangkudu'
        ]);
    }
}
