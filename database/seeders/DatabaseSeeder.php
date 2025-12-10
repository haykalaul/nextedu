<?php

namespace Database\Seeders;
use App\Models\ArtikelSeeder;
use App\Models\Jurusan;
use App\Models\KategoriArtikel;
use Database\Seeders\ArtikelSeeder as SeedersArtikelSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            pertanyaanSeeder::class,
            JurusanSeeder::class,
            KategoriArtikelSeeder::class,
            SaranPekerjaanSeeder::class,
            SeedersArtikelSeeder::class,
            RuleSeeder::class,
            HasilTesSeeder::class,
        ]);
    }
}
