<?php

namespace Database\Seeders;

use App\Models\Dosen;
use App\Models\Jadwal;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kelas = DB::table('dosen_kelas')->get();
        $hari = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum\'at', 'Sabtu'];

        foreach ($kelas as $key => $kls) {
            $hour = rand(0, 23);
            $minute = rand(0, 59);
            $jam_keluar_hour = $hour + 2 > 23 ? $hour + 2 - 24 : $hour + 2;
            $jam_keluar_minute = $minute;

            // Format jam_masuk dan jam_keluar agar selalu memiliki dua digit
            $hour = str_pad($hour, 2, '0', STR_PAD_LEFT);
            $minute = str_pad($minute, 2, '0', STR_PAD_LEFT);
            $jam_keluar_hour = str_pad($jam_keluar_hour, 2, '0', STR_PAD_LEFT);
            $jam_keluar_minute = str_pad($jam_keluar_minute, 2, '0', STR_PAD_LEFT);

            // Logika untuk menentukan tanggal
            $tanggal = now()->addDays(rand(0, 30))->format('Y-m-d'); // Acak tanggal dalam 30 hari ke depan

            // Buat data jadwal
            Jadwal::create([
                'kelas_id' => $kls->kelas_id,
                'dosen_id' => $kls->dosen_id,
                'matkul_id' => $kls->matkul_id,
                'hari' => $hari[array_rand($hari)],
                'jam_masuk' => "$hour:$minute",
                'jam_keluar' => "$jam_keluar_hour:$jam_keluar_minute",
                'tanggal' => $tanggal, // Tambahkan atribut tanggal
            ]);
        }
    }
}
