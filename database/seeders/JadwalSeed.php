<?php

namespace Database\Seeders;

use App\Models\Jadwal;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JadwalSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mahasiswa = DB::table('mahasiswas')->get();
        $matkul = DB::table('matkuls')->get();
        $dosen = DB::table('users')->where('username', 'dosen')->first();
        $dosenPemasaran = DB::table('users')->where('username', 'dosenpemasaran')->first();

        for ($i=0; $i < 12; $i++) { 

            DB::table('jadwals')->insert([
                'id_mahasiswa' => $mahasiswa[$i]->id,
                'id_matkul' => $matkul[$i]->id,
                'id_dosen' => $dosen->id,
            ]);
    
        }

        for ($i=5; $i <= 10; $i++) { 

            DB::table('jadwals')->insert([
                'id_mahasiswa' => $mahasiswa[$i]->id,
                'id_matkul' => $matkul[9]->id,
                'id_dosen' => $dosenPemasaran->id,
            ]);
    
        }
    }
}
