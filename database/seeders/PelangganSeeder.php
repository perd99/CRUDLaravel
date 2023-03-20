<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pelanggans')->insert([
            'nama' => 'Prayogi Mulia Perdana',
            'hbsolar' => 'Bio Solar',
            'hjsolar' => 'Pertamax 92',
            'hjoli' => 'Castrol Magnatec',
            'hjlain' => 'Pertalite',
            'diskon' => '50%',
            'phone' => '087865328947',
            'kontak' => '085432659847',
            'wilayah' => 'Palembang, Lampung',
        ]);
    }
}
