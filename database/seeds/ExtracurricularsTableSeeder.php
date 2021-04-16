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
            'esc_id' 	      => '1',
            'esc_name'        => 'Pramuka',
        	'esc_description' => 'Pramuka adalah salah satu ekstrakulikuler yang wajib di SMKS Mahaputra Cerdas Utama dan juga merupakan salah satu ekskul pbb yang ada di mahaputra',
            'esc_vision_mission' => 'Menjadi siswa atau siswi yang tangguh dan cerdas',
            'esc_logo'        => 'asff'
        ]);

         DB::table('extracurriculars')->insert([
            'esc_id' 	      => '2',
            'esc_name'        => 'Voly',
        	'esc_description' => 'Voly adalah olahraga bola voly dan juga salah satu ekstrakulikuler yang ada di SMKS Mahaputra Cerdas Utama',
            'esc_vision_mission' => 'Menjadi siswa atau siswi yang tangguh dan cerdas',
            'esc_logo'        => 'asdgvs'
        ]);

          DB::table('extracurriculars')->insert([
            'esc_id' 	      => '3',
            'esc_name'        => 'RPL',
        	'esc_description' => 'Rekayasa Perangkat Lunak adalah ekstrakulikuler yang mendalami cara-cara pengembangan perangkat lunak',
            'esc_vision_mission' => 'Menjadi siswa atau siswi yang tangguh dan cerdas',
            'esc_logo'        => 'aschbdc'
        ]);

           DB::table('extracurriculars')->insert([
            'esc_id' 	      => '4',
            'esc_name'        => 'Multimedia',
        	'esc_description' => 'Multimedia adalah ekstrakulikuler yang menjadi sarana media informasi pada komputer',
            'esc_vision_mission' => 'Menjadi siswa atau siswi yang tangguh dan cerdas',
            'esc_logo'        => 'cjdscsdj'
        ]);

            DB::table('extracurriculars')->insert([
            'esc_id' 	      => '5',
            'esc_name'        => 'Paduan Suara',
        	'esc_description' => 'Paduan Suara adalah ekstrakulikuler ensembel musik yang terdiri dari suatu kelompok paduan suara',
            'esc_vision_mission' => 'Menjadi siswa atau siswi yang tangguh dan cerdas',
            'esc_logo'        => 'jcjds'
        ]);

            DB::table('extracurriculars')->insert([
            'esc_id' 	      => '6',
            'esc_name'        => 'Nampon',
        	'esc_description' => 'Nampon adalah ekstrakulikuler seni beladiri pencak silat yang berasal dari padalarang, indonesia',
            'esc_vision_mission' => 'Menjadi siswa atau siswi yang tangguh dan cerdas',
            'esc_logo'        => 'dcddc'
        ]);

            DB::table('extracurriculars')->insert([
            'esc_id' 	      => '7',
            'esc_name'        => 'Basket',
        	'esc_description' => 'Basket adalah ekstrakulikuler olahraga berkelompok yang didalamnya berlatih, bermain, serta bertanding bola basket',
            'esc_vision_mission' => 'Menjadi siswa atau siswi yang tangguh dan cerdas',
            'esc_logo'        => 'sdcds'
        ]);

            DB::table('extracurriculars')->insert([
            'esc_id' 	      => '8',
            'esc_name'        => 'Panahan',
        	'esc_description' => 'Panahan adalah ekstrakulikuler yang kegiatannya menggunakan busur panah untuk menembakan anak panah',
            'esc_vision_mission' => 'Menjadi siswa atau siswi yang tangguh dan cerdas',
            'esc_logo'        => 'xcdsc'
        ]);

            DB::table('extracurriculars')->insert([
            'esc_id' 	      => '9',
            'esc_name'        => 'Rohis',
        	'esc_description' => 'Rohani Islam adalah ekstrakulikuler yang mendalami dan memperkuat ajaran islam',
            'esc_vision_mission' => 'Menjadi siswa atau siswi yang tangguh dan cerdas',
            'esc_logo'        => 'cdds'
        ]);

    }
}
