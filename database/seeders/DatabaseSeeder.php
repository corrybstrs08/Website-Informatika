<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            jumlahSeed::class,
            kurikulum::class,
            eventSeeder::class,
            beritaSeed::class,
            visiMisi::class,
            kopmetisiSeed::class,
            dosenSeed::class,
            mahasiswaSeed::class,
            UserSeeder::class,
            OrganisasiSeed::class,
        ]);
    }
}
