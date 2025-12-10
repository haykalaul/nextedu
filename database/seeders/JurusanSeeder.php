<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Jurusan;
use Carbon\Carbon;

class JurusanSeeder extends Seeder
{
    public function run(): void
    {
        $jurusan = [
            [
                'jurusan_code' => 'J1',
                'jurusan'      => 'Teknik Komputer Jaringan',
                'jenis'        => 'Teknik',
                'img'          => 'tkj.jpg',
                'deskripsi'    => 'Jurusan yang berfokus pada jaringan komputer, pemrograman dasar, dan perbaikan perangkat keras.',
                'created_at'   => Carbon::now(),
                'updated_at'   => Carbon::now(),
            ],
            [
                'jurusan_code' => 'J2',
                'jurusan'      => 'Akuntansi',
                'jenis'        => 'Business',
                'img'          => 'akuntansi.jpg',
                'deskripsi'    => 'Jurusan yang mempelajari pencatatan, pelaporan, dan analisis keuangan.',
                'created_at'   => Carbon::now(),
                'updated_at'   => Carbon::now(),
            ],
            [
                'jurusan_code' => 'J3',
                'jurusan'      => 'Desain Grafis',
                'jenis'        => 'Seni',
                'img'          => 'dkv.jpg',
                'deskripsi'    => 'Jurusan yang berfokus pada desain visual dan multimedia.',
                'created_at'   => Carbon::now(),
                'updated_at'   => Carbon::now(),
            ],
            [
                'jurusan_code' => 'J4',
                'jurusan'      => 'Teknik Sipil',
                'jenis'        => 'Engineering',
                'img'          => 'sipil.jpg',
                'deskripsi'    => 'Jurusan yang mempelajari konstruksi bangunan dan infrastruktur.',
                'created_at'   => Carbon::now(),
                'updated_at'   => Carbon::now(),
            ],
            [
                'jurusan_code' => 'J5',
                'jurusan'      => 'Biologi',
                'jenis'        => 'Sains',
                'img'          => 'biologi.jpg',
                'deskripsi'    => 'Jurusan yang mempelajari makhluk hidup dan lingkungannya.',
                'created_at'   => Carbon::now(),
                'updated_at'   => Carbon::now(),
            ],
            [
                'jurusan_code' => 'J6',
                'jurusan'      => 'Komunikasi',
                'jenis'        => 'Sosial',
                'img'          => 'komunikasi.jpg',
                'deskripsi'    => 'Jurusan yang mempelajari penyampaian informasi dan media massa.',
                'created_at'   => Carbon::now(),
                'updated_at'   => Carbon::now(),
            ],
            [
                'jurusan_code' => 'J7',
                'jurusan'      => 'Psikologi',
                'jenis'        => 'Sosial',
                'img'          => 'psikologi.jpg',
                'deskripsi'    => 'Jurusan yang mempelajari perilaku dan mental manusia.',
                'created_at'   => Carbon::now(),
                'updated_at'   => Carbon::now(),
            ],
        ];

        Jurusan::insert($jurusan);
    }
}
