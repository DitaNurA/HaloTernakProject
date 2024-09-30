<?php

namespace App\Models;

use CodeIgniter\Model;

class PetugasModel extends Model
{
    protected $table = 'petugas';
    protected $primaryKey = 'id_petugas';

    protected $allowedFields = [
        'nama_petugas', 'no_registrasi', 'kecamatan', 'desa_binaan',
        'nomor_hp', 'password', 'status', 'foto'
    ];

    //protected $validationRules = [
      //  'nama_petugas'   => 'required',
        //'no_registrasi'  => 'required',
        //'kecamatan'      => 'required',
        //'desa_binaan'    => 'required',
        //'nomor_hp'       => 'required',
        //'password'       => 'permit_empty',
        //'foto'           => 'permit_empty|is_image[foto]|max_size[foto,2048]',
    //];

    public function getPetugas()
    {
        return $this->findAll(); // Menggunakan metode findAll() dari Model
    }
}


