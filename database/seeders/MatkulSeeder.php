<?php

namespace Database\Seeders;

use App\Models\Matkul;
use Illuminate\Database\Seeder;

class MatkulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $matkuls = collect([
            'Advance Database Management Systems',
            'Bela Negara',
            'Internet of Things',
            'Metodologi Penelitian',
            'User Experience Design',
        ]);

        $matkuls->each(function($matkul){
            $arr = explode(' ', $matkul);
            $singkatan = '';

            foreach($arr as $kata)
            {
                $singkatan .= substr($kata, 0, 1);
            }

            Matkul::create([
                'kd_matkul' => $singkatan,
                'nm_matkul' => $matkul,
                'sks' => rand(1,10)
            ]);
        });

        



    }
}
