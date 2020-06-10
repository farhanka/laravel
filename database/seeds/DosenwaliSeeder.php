<?php

use Illuminate\Database\Seeder;
use App\Dosenwali;
class DosenwaliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DosenWali::create([
            'nama' => 'Sampel Dosen',
            'nip' => '123789',
        ]);
    }
}
