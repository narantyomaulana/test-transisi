<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImportExcel extends Model
{
    use HasFactory;

    public function model(array $row)
    {
        return new Company([
            'name' => $row[0],
            'email' => $row[1],
            'website' => $row[2],
            // Tambahkan kolom lain sesuai kebutuhan
        ]);
    }
}
