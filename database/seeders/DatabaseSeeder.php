<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\PaketSeeder;
use Database\Seeders\BangunanSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Laravolt\Indonesia\Seeds\CitiesSeeder;
use Laravolt\Indonesia\Seeds\DistrictsSeeder;
use Laravolt\Indonesia\Seeds\ProvincesSeeder;
use Laravolt\Indonesia\Seeds\VillagesSeeder;

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
            ProvincesSeeder::class,
            CitiesSeeder::class,
            DistrictsSeeder::class,
            VillagesSeeder::class,
        ]);

        $this->call(UserSeeder::class);
        $this->call(PaketSeeder::class);
        $this->call(BangunanSeeder::class);
    }
}
