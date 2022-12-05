<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'kode_member' => '73618',
            'username' => 'admin',
            'password' => 'admin',
            'nama' => 'admin',
            'ribath' => 'AS SYAFII',
            'kamar' => '2',
            'sekolah' => 'MAN',
            'kelas' => 'WUSTHO',
            'kelas_MHM' => 'WUSTHO',
            'level' => '1',
        ]);
        User::create([
            'kode_member' => '54724',
            'username' => 'aufa',
            'password' => 'aufa',
            'nama' => 'M. AUFA ALFIS SYIHAB',
            'ribath' => 'AS SYAFII',
            'kamar' => '2',
            'sekolah' => 'MAN',
            'kelas' => 'WUSTHO',
            'kelas_MHM' => 'WUSTHO',
            'level' => '2',
        ]);
    }
}
