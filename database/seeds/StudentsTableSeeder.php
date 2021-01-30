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
            'std_name'	 => 'Rismawati',
        	'std_gender' => 'Perempuan',
        	'std_class'	 => 'xii rekayasa perangkat lunak 2',
        	'std_address' => 'Landean'
        ]);

         DB::table('students')->insert([
            'std_id' 	 => '2',
            'std_name'	 => 'Elsa Lusiani',
        	'std_gender' => 'perempuan',
        	'std_class'	 => 'xii rekayasa perangkat lunak 2',
        	'std_address' => 'Bojong'
        ]);

         DB::table('students')->insert([
            'std_id' 	 => '3',
            'std_name'	 => 'Alika Tazkiyah',
        	'std_gender' => 'perempuan',
        	'std_class'	 => 'xii rekayasa perangkat lunak 1',
        	'std_address' => 'juntihilir'
        ]);

         DB::table('students')->insert([
            'std_id' 	 => '4',
            'std_name'	 => 'Rizki Muhammad M',
        	'std_gender' => 'Laki - Laki',
        	'std_class'	 => 'xii rekayasa perangkat lunak 2',
        	'std_address' => 'Bojong'
        ]);

         DB::table('students')->insert([
            'std_id' 	 => '5',
            'std_name'	 => 'Asiah Nurjanah',
        	'std_gender' => 'Perempuan',
        	'std_class'	 => 'xii rekayasa perangkat lunak 2',
        	'std_address' => 'Cangkudu'
        ]);
    }
}
