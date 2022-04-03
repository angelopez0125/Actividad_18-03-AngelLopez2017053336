<?php 
namespace App\Models;

use CodeIgniter\Model;

class Prestamo extends Model{
    protected $table      = 'prestamos';
    protected $primaryKey = 'numero_prestamo';
    protected $allowedFields =['numero_prestamo','codigo_libro','carne_alumno','fecha_prestamo','fecha_devolucion','codigo_empleado'];
}