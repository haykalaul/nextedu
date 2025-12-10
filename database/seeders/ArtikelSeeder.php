<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Artikel;
use Carbon\Carbon;

class ArtikelSeeder extends Seeder
{
    /**
     * Jalankan database seed.
     */
    public function run(): void
    {
        $artikels = [
            [
                'judul'        => 'Panduan Belajar Jaringan Komputer',
                'img'          => 'jaringan.jpg',
                'sinopsis'     => 'Artikel lengkap tentang dasar-dasar jaringan komputer untuk pemula.',
                'link'         => 'https://example.com/artikel/jaringan-komputer',
                'jurusan_id'   => 1,
                'kategori_id'  => 1,
                'created_at'   => Carbon::now(),
                'updated_at'   => Carbon::now(),
            ],
            [
                'judul'        => 'Tips Perawatan Sepeda Motor',
                'img'          => 'motor.jpg',
                'sinopsis'     => 'Cara merawat sepeda motor agar tetap awet dan performa maksimal.',
                'link'         => 'https://example.com/artikel/perawatan-motor',
                'jurusan_id'   => 2,
                'kategori_id'  => 2,
                'created_at'   => Carbon::now(),
                'updated_at'   => Carbon::now(),
            ],
            [
                'judul'        => 'Sistem Kelistrikan Mobil Modern',
                'img'          => 'mobil.jpg',
                'sinopsis'     => 'Memahami sistem kelistrikan pada kendaraan ringan modern.',
                'link'         => 'https://example.com/artikel/sistem-kelistrikan',
                'jurusan_id'   => 3,
                'kategori_id'  => 2,
                'created_at'   => Carbon::now(),
                'updated_at'   => Carbon::now(),
            ],
            [
                'judul'        => 'Manajemen Dokumen Kantor yang Efektif',
                'img'          => 'admin.jpg',
                'sinopsis'     => 'Strategi mengelola dokumen kantor dengan sistem yang terorganisir.',
                'link'         => 'https://example.com/artikel/manajemen-dokumen',
                'jurusan_id'   => 4,
                'kategori_id'  => 3,
                'created_at'   => Carbon::now(),
                'updated_at'   => Carbon::now(),
            ],
        ];

        // Insert data ke database
        Artikel::insert($artikels);
    }
}
