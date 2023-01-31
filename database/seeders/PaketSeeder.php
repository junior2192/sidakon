<?php

namespace Database\Seeders;

use App\Models\Paket;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PaketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Paket::Create([
         'tahun_anggaran' => 2019,
         'name' => 'SID Embung di DAS Citanduy Kabupaten Cilacap',
         'no_kontrak' => '',
         'tgl_kontrak' => null,
         'penyedia_jasa' => '',
        ]);

        Paket::Create([
            'tahun_anggaran' => 2019,
            'name' => 'DED Check Dam di DAS Citanduy Hulu',
            'no_kontrak' => '',
            'tgl_kontrak' => null,
            'penyedia_jasa' => '',
        ]);

        Paket::create([
            'tahun_anggaran' => 2019,
            'name' => 'SID Pengamanan Pantai Timur Pangandaran Sampai Pantai Karapyak di Kabupaten Pangandaran',
            'no_kontrak' => '',
            'tgl_kontrak' => null,
            'penyedia_jasa' => '',
        ]);

        Paket::Create([
            'tahun_anggaran' => 2019,
            'name' => 'Amdal Quarry Bendungan Leuwikeris',
            'no_kontrak' => '',
            'tgl_kontrak' => null,
            'penyedia_jasa' => '',
        ]);
    }
}
