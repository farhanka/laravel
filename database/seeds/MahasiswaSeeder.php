<?php

use Illuminate\Database\Seeder;
use App\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mahasiswa::create([
            'nama' => 'Sampel Mahasiswa',
            'nim' => '1808107010000',
            'jenis_kelamin' => 'P',
        ]);
    }
}
