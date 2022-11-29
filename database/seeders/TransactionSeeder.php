<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Transaction::create([
            'kode_member' => '54724',
            'book_id' => '1',
            'tgl_pinjam' => now(),
            'tgl_kembali' => now(),
        ]);
    }
}
