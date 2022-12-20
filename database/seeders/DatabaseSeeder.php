<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\PaketSeeder;
use Database\Seeders\BangunanSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(PaketSeeder::class);
        $this->call(BangunanSeeder::class);
    }
}
