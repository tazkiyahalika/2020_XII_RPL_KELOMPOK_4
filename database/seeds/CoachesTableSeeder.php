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
            'coc_usr_id'          => '8',
            'coc_esc_id'          => '1',
            'coc_place'           => 'Lebak',
        	'coc_gender'          => 'Laki - Laki',
            'coc_study'           => 'S1',
            'coc_job'             => 'TNI AU',
            'coc_address'         => 'Perumahan.Cincin permata indah Blok E Rt 05/Rw 11. Desa Cingcin Kec. Soreang 
                                      Kab.Bandung No. 26' 	
        ]);

    	 DB::table('coaches')->insert([
            'coc_id'              => '2',
            'coc_usr_id'          =>  '9',
            'coc_esc_id'          => '2',
            'coc_place'           => 'Bandung',
            'coc_gender'          => 'Perempuan',
            'coc_study'           => 'S1',
            'coc_job'             => 'Guru Honorer',
            'coc_address'         => 'Kp. ciborerang no.155 Rt 3/Rw 20 Desa Sangkanhurip kec. Katapang kab.bandung'
        ]);

    	 DB::table('coaches')->insert([
            'coc_id'              => '3',
            'coc_usr_id'          => '10',
            'coc_esc_id'          => '3',
            'coc_place'           => 'Bandung',
            'coc_gender'          => 'Laki - Laki',
            'coc_study'           => 'D3',
            'coc_job'             => 'Guru',
            'coc_address'         => 'kp. citerep'
        ]);

    	 DB::table('coaches')->insert([
            'coc_id'              => '4',
            'coc_usr_id'          => '11',
            'coc_esc_id'          => '4',
            'coc_place'           => 'Cilegon',
            'coc_gender'          => 'Laki - Laki',
            'coc_study'           => 'S1',
            'coc_job'             => 'Guru',
            'coc_address'         => 'kp.hilir'
        ]);

    	 DB::table('coaches')->insert([
            'coc_id'              => '5',
            'coc_usr_id'          => '12',
            'coc_esc_id'          => '5',
            'coc_place'           => 'Bandung',
            'coc_gender'          => 'Laki - Laki',
            'coc_study'           => 'SMA',
            'coc_job'             => 'Pegawai Pemda',
            'coc_address'         => 'Kp. Paledang Rt 02/Rw 09 Desa Bojongkunci'
        ]);

    	 DB::table('coaches')->insert([
            'coc_id'              => '6',
            'coc_usr_id'          => '13',
            'coc_esc_id'          => '6',
            'coc_place'           => 'Bandung',
            'coc_gender'          => 'Laki - Laki',
            'coc_study'           => 'S1',
            'coc_job'             => 'Pengajar',
            'coc_address'         => 'Jln Katapang Pamoyanan Rt 01/Rw 05'
        ]);

    	 DB::table('coaches')->insert([
            'coc_id'              => '7',
            'coc_usr_id'          => '14',
            'coc_esc_id'          => '7',
            'coc_place'           => 'Bandung',
            'coc_gender'          => 'Laki - Laki',
            'coc_study'           => 'S1',
            'coc_job'             => 'Guru',
            'coc_address'         => 'Perumahan gading Junti Asri, blok n1 no.4'
        ]);

    	 DB::table('coaches')->insert([
            'coc_id'              => '8',
            'coc_usr_id'          => '15',
            'coc_esc_id'          => '8',
            'coc_place'           => 'Bandung',
            'coc_gender'          => 'Laki - Laki',
            'coc_study'           => 'MA',
            'coc_job'             => 'Wirausaha',
            'coc_address'         => 'Kp Bojong Cibodas no.1 Rt 02/Rw 07 Desa. Malakasari Kec. Baleendah'
        ]);

    	 DB::table('coaches')->insert([
            'coc_id'              => '9',
            'coc_usr_id'          => '16',
            'coc_esc_id'          => '9',
            'coc_place'           => 'Bandung',
            'coc_gender'          => 'Laki - Laki',
            'coc_study'           => 'S3',
            'coc_job'             => 'Pengajar',
            'coc_address'         => 'kp.paledang'
        ]);
    }
}
