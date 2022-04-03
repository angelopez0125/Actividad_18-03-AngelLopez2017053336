<?php 
namespace App\Models;

use CodeIgniter\Model;

class Autor extends Model{
    protected $table      = 'autores';
    protected $primaryKey = 'codigo_autor';
    protected $allowedFields =['codigo_autor','apellido','nombre','nacionalidad'];
}