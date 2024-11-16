<?php

namespace Database\Seeders;

use App\Models\Fakultas;
use Illuminate\Database\Seeder;

class FakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fakultas = collect([
            'Teknologi Informasi',
            'Sistem Informasi',
            'Rekayasa Perangkat Lunak',
            'Ilmu Komputer',
            'Teknik Komputer Jaringan',
            'Sistem Database',
            'Game Development',
            'Machine Learning',
            'Cloud Sistem',
        ]);

        $fakultas->each(function($fk){
            $arr = explode(' ', $fk);
            $singkatan = '';

            foreach($arr as $kata)
            {
                $singkatan .= substr($kata, 0, 1);
            }

            Fakultas::create([
                'kd_fk' => $singkatan,
                'nama' => $fk, 
            ]);
        });
    }
}
