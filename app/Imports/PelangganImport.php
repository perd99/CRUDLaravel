<?php

namespace App\Imports;

use App\Models\Pelanggan;
use Maatwebsite\Excel\Concerns\ToModel;

class PelangganImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Pelanggan([
            'nama' => $row[1],
            'hbsolar' => $row[2],
            'hjsolar' => $row[3],
            'hjoli' => $row[4],
            'hjlain' => $row[5],
            'diskon' => $row[6],
            'phone' => $row[7],
            'kontak' => $row[8],
            'wilayah' => $row[9]

        ]);
    }
}
