<?php

namespace App\Models;

use CodeIgniter\Model;

class ObatModel extends Model
{
    protected $table = 'obat';
    protected $primaryKey = 'id_obat';

    protected $allowedFields = [
        'nama_obat', 'deskripsi', 'foto'
    ];


    public function getObat()
    {
        return $this->findAll(); // Menggunakan metode findAll() dari Model
    }
}


