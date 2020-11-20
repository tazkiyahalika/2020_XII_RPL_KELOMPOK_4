<?php

use Illuminate\Database\Seeder;

class ExtracurricularsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('extracurriculars')->insert([
            'esc_id' 	 => '1',
            'esc_name'   => 'Pramuka',
        	'esc_coc_id' => '1',
        	'esc_std_id' => '1'
        ]);

         DB::table('extracurriculars')->insert([
            'esc_id' 	 => '2',
            'esc_name'   => 'Voly',
        	'esc_coc_id' => '2',
        	'esc_std_id' => '3'
        ]);

          DB::table('extracurriculars')->insert([
            'esc_id' 	 => '3',
            'esc_name'   => 'RPL',
        	'esc_coc_id' => '3',
        	'esc_std_id' => '11'
        ]);

           DB::table('extracurriculars')->insert([
            'esc_id' 	 => '4',
            'esc_name'   => 'Multimedia',
        	'esc_coc_id' => '4',
        	'esc_std_id' => '12'
        ]);

            DB::table('extracurriculars')->insert([
            'esc_id' 	 => '5',
            'esc_name'   => 'Paduan Suara',
        	'esc_coc_id' => '5',
        	'esc_std_id' => '14'
        ]);

            DB::table('extracurriculars')->insert([
            'esc_id' 	 => '6',
            'esc_name'   => 'Nampon',
        	'esc_coc_id' => '6',
        	'esc_std_id' => '16'
        ]);

            DB::table('extracurriculars')->insert([
            'esc_id' 	 => '7',
            'esc_name'   => 'Basket',
        	'esc_coc_id' => '7',
        	'esc_std_id' => '20'
        ]);

            DB::table('extracurriculars')->insert([
            'esc_id' 	 => '8',
            'esc_name'   => 'Panahan',
        	'esc_coc_id' => '8',
        	'esc_std_id' => '11'
        ]);

            DB::table('extracurriculars')->insert([
            'esc_id' 	 => '9',
            'esc_name'   => 'Rohis',
        	'esc_coc_id' => '9',
        	'esc_std_id' => '20'
        ]);

    }
}
