<?php

use Illuminate\Database\Seeder;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'usr_name' => 'Admin',
            'usr_email' => 'admin@gmail.com',
            'usr_phone' => '08213456789',
            'usr_password' => Hash::make('admin123'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

        $admin->assignRole('admin');

        $siswa = User::create([
            'usr_name' => 'Student',
            'usr_email' => 'student1@gmail.com',
            'usr_phone' => '08213456789',
            'usr_password' => Hash::make('student123'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

        $siswa = User::create([
            'usr_name' => 'Student',
            'usr_email' => 'student2@gmail.com',
            'usr_phone' => '08213456789',
            'usr_password' => Hash::make('student123'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

        $siswa = User::create([
            'usr_name' => 'Student',
            'usr_email' => 'student3@gmail.com',
            'usr_phone' => '08213456789',
            'usr_password' => Hash::make('student123'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

        $siswa = User::create([
            'usr_name' => 'Student',
            'usr_email' => 'student4@gmail.com',
            'usr_phone' => '08213456789',
            'usr_password' => Hash::make('student123'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

        $siswa = User::create([
            'usr_name' => 'Student',
            'usr_email' => 'student5@gmail.com',
            'usr_phone' => '08213456789',
            'usr_password' => Hash::make('student123'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

        $siswa->assignRole('student');

        $guru = User::create([
            'usr_name' => 'coach',
            'usr_email' => 'coach@gmail.com',
            'usr_phone' => '08213456789',
            'usr_password' => Hash::make('coach123'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

        $guru->assignRole('coach');

        $guru = User::create([
            'usr_name' => 'Eman Sulaeman',
            'usr_email' => 'coach1@gmail.com',
            'usr_phone' => '08213456789',
            'usr_password' => Hash::make('coach123'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

        $guru->assignRole('coach');

        $guru = User::create([
            'usr_name' => 'Annisa Komalasari',
            'usr_email' => 'coach2@gmail.com',
            'usr_phone' => '08213456789',
            'usr_password' => Hash::make('coach123'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

        $guru->assignRole('coach');

        $guru = User::create([
            'usr_name' => 'Dede Suryana',
            'usr_email' => 'coach3@gmail.com',
            'usr_phone' => '08213456789',
            'usr_password' => Hash::make('coach123'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

        $guru->assignRole('coach');

        $guru = User::create([
            'usr_name' => 'Yusuf Maulana',
            'usr_email' => 'coach4@gmail.com',
            'usr_phone' => '08213456789',
            'usr_password' => Hash::make('coach123'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

        $guru->assignRole('coach');

        $guru = User::create([
            'usr_name' => 'Cucun',
            'usr_email' => 'coach5@gmail.com',
            'usr_phone' => '08213456789',
            'usr_password' => Hash::make('coach123'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

        $guru->assignRole('coach');

        $guru = User::create([
            'usr_name' => 'Yadi',
            'usr_email' => 'coach6@gmail.com',
            'usr_phone' => '08213456789',
            'usr_password' => Hash::make('coach123'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

        $guru->assignRole('coach');

        $guru = User::create([
            'usr_name' => 'Hasymie',
            'usr_email' => 'coach7@gmail.com',
            'usr_phone' => '08213456789',
            'usr_password' => Hash::make('coach123'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

        $guru->assignRole('coach');

        $guru = User::create([
            'usr_name' => 'Hadi',
            'usr_email' => 'coac8h@gmail.com',
            'usr_phone' => '08213456789',
            'usr_password' => Hash::make('coach123'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

        $guru->assignRole('coach');

        $guru = User::create([
            'usr_name' => 'Aang',
            'usr_email' => 'coach9@gmail.com',
            'usr_phone' => '08213456789',
            'usr_password' => Hash::make('coach123'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

        $guru->assignRole('coach');



       
    }
}
