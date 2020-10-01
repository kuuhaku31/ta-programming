<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    // for siswa database
    protected $table = "siswa";
    protected $useTimeStamps = true;
    protected $primaryKey = 'nisn';
    protected $allowedFields = [
        'nama', 'nisn', 'nis', 'tem_lahir', 'tan_lahir', 'kelas', 'jurusan', 'j_kelamin', 'alamat'
    ];

    // get all siswa function     
    public function getSiswa($nisn = false)
    {
        if ($nisn == false) {
            return $this->findAll();
        }
        return $this->where(['nisn' => $nisn])->first();
    }

    // public function saveSiswa($data)
    // {
    //     $builder = $this->db->table($this->table);

    //     return $builder->insert($data);
    // }
}
