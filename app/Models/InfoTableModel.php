<?php
namespace App\Models;

use CodeIgniter\Model;

class InfoTableModel extends Model
{
    protected $table            = 'info_table';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['name', 'ct', 'ut', 'dt', 'st'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime'; // 2023-11-11 00:00:00
    protected $createdField  = 'ct';
    protected $updatedField  = 'ut';
    protected $deletedField  = 'dt';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];


    public function getIDbyCond($query_str = null)
    {
        $builder = $this->db->table($this->table);
        $builder->select('id');
        $builder->where("name", $query_str);
        $query = $builder->get();
        $query_num = $query->getNumRows();

        $query = $query->getResult('array');

        if ($query_num == 1) {
            return $query[0]['id'];
        }

        return null;
    }

    

}