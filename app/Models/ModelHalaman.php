<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelHalaman extends Model
{
    protected $table            = 'halaman';
    protected $primaryKey       = 'halaman_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    //protected $useSoftDeletes   = true;
    //protected $protectFields    = true;
    protected $allowedFields    = ['halaman_judul', 'halaman_isi'];

    // // Dates
    // protected $useTimestamps = false;
    // protected $dateFormat    = 'datetime';
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // // Validation
    // protected $validationRules      = [];
    // protected $validationMessages   = [];
    // protected $skipValidation       = false;
    // protected $cleanValidationRules = true;

    // // Callbacks
    // protected $allowCallbacks = true;
    // protected $beforeInsert   = [];
    // protected $afterInsert    = [];
    // protected $beforeUpdate   = [];
    // protected $afterUpdate    = [];
    // protected $beforeFind     = [];
    // protected $afterFind      = [];
    // protected $beforeDelete   = [];
    // protected $afterDelete    = [];
}
