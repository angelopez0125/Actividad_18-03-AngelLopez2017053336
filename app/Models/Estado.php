<?php 
namespace App\Models;

use CodeIgniter\Model;

class Estado extends Model{
    protected $table      = 'estados';
    protected $primaryKey = 'codigo_estado';
    protected $allowedFields =['codigo_estado','nombre'];

}