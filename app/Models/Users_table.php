<?php 
namespace App\Models;

use CodeIgniter\Model;
use App\Config\Validation;

class Users_table extends Model{
    protected $table      = 'users';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    //como será retornado do banco de dados
    protected $returnType     = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id', 'user_name', 'email', 'password'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'user_name'     => 'required',
        'email'        => 'required',
        'password'     => 'required|min_length[3]',
    ];
    protected $validationMessages   = [
        'user_name' => [
            'required' => 'Este campo é obrigatório.',
        ],
        'email' => [
            'required' => 'Este campo é obrigatório.',
        ],
        'password' => [
            'required' => 'Este campo é obrigatório.',
            'min_length' => 'A senha deve conter no mínimo 3 caracteres.',
        ]
    ];
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
}