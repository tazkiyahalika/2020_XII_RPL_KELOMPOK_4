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
            'coc_id' 	          => '1',
            'coc_name'            => 'Eman Sulaeman',
            'coc_extracurricular' => 'Pramuka',
            'coc_birth'           => 'Lebak, 25 April 1970',
        	'coc_gender'          => 'Laki - Laki',
            'coc_study'           => 'S1',
            'coc_job'             => 'TNI AU',
            'coc_address'         => 'Perumahan.Cincin permata indah Blok E Rt 05/Rw 11. Desa Cingcin Kec. Soreang 
                                      Kab.Bandung No. 26' 	
        ]);

    	 DB::table('coaches')->insert([
            'coc_id'              => '2',
            'coc_name'            => 'Annisa Komalasari',
            'coc_extracurricular' => 'Voli',
            'coc_birth'           => 'Bandung, 31 Maret 1996',
            'coc_gender'          => 'Perempuan',
            'coc_study'           => 'S1',
            'coc_job'             => 'Guru Honorer',
            'coc_address'         => 'Kp. ciborerang no.155 Rt 3/Rw 20 Desa Sangkanhurip kec. Katapang kab.bandung'
        ]);

    	 DB::table('coaches')->insert([
            'coc_id'              => '3',
            'coc_name'            => 'Dede Suryana',
            'coc_extracurricular' => 'RPL',
            'coc_birth'           => 'Bandung, 12 desember 1994',
            'coc_gender'          => 'Laki - Laki',
            'coc_study'           => 'D3',
            'coc_job'             => 'Guru',
            'coc_address'         => 'kp. citerep'
        ]);

    	 DB::table('coaches')->insert([
            'coc_id'              => '4',
            'coc_name'            => 'Yusuf Maulina',
            'coc_extracurricular' => 'Multimedia',
            'coc_birth'           => 'Cilegon, 1 januari 1993',
            'coc_gender'          => 'Laki - Laki',
            'coc_study'           => 'S1',
            'coc_job'             => 'Guru',
            'coc_address'         => 'kp.hilir'
        ]);

    	 DB::table('coaches')->insert([
            'coc_id'              => '5',
            'coc_name'            => 'Cucun',
            'coc_extracurricular' => 'Paduan Suara',
            'coc_birth'           => 'Bandung, 17 juli 1983',
            'coc_gender'          => 'Laki - Laki',
            'coc_study'           => 'SMA',
            'coc_job'             => 'Pegawai Pemda',
            'coc_address'         => 'Kp. Paledang Rt 02/Rw 09 Desa Bojongkunci'
        ]);

    	 DB::table('coaches')->insert([
            'coc_id'              => '6',
            'coc_name'            => 'Yadi Hambali',
            'coc_extracurricular' => 'Nampon',
            'coc_birth'           => 'Bandung, 24 April 1985',
            'coc_gender'          => 'Laki - Laki',
            'coc_study'           => 'S1',
            'coc_job'             => 'Pengajar',
            'coc_address'         => 'Jln Katapang Pamoyanan Rt 01/Rw 05'
        ]);

    	 DB::table('coaches')->insert([
            'coc_id'              => '7',
            'coc_name'            => 'Hasymie',
            'coc_extracurricular' => 'Basket',
            'coc_birth'           => 'Bandung, 12 november 1994',
            'coc_gender'          => 'Laki - Laki',
            'coc_study'           => 'S1',
            'coc_job'             => 'Guru',
            'coc_address'         => 'Perumahan gading Junti Asri, blok n1 no.4'
        ]);

    	 DB::table('coaches')->insert([
            'coc_id'              => '8',
            'coc_name'            => 'Hadi',
            'coc_extracurricular' => 'Panahan',
            'coc_birth'           => 'Bandung, 10 mei 1964',
            'coc_gender'          => 'Laki - Laki',
            'coc_study'           => 'MA',
            'coc_job'             => 'Wirausaha',
            'coc_address'         => 'Kp Bojong Cibodas no.1 Rt 02/Rw 07 Desa. Malakasari Kec. Baleendah'
        ]);

    	 DB::table('coaches')->insert([
            'coc_id'              => '9',
            'coc_name'            => 'Aang',
            'coc_extracurricular' => 'Rohis',
            'coc_birth'           => 'Bandung',
            'coc_gender'          => 'Laki - Laki',
            'coc_study'           => 'S3',
            'coc_job'             => 'Pengajar',
            'coc_address'         => 'kp.paledang'
        ]);
    }
}
