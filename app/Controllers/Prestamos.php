<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Prestamo;
class Prestamos extends Controller{

    public function cargarPrestamos(){
        //instanciar la clase Empleado (Models con conexion a la tabla de la base de datos)
        $prestamo = new Prestamo();
        //recibir el resultado del select en un array
        $datos['misPrestamos']=$prestamo->orderBy('numero_prestamo','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('prestamos/lista_prestamo', $datos);
    }
    public function eliminarPrestamo($codigo=null){
        //echo "Codigo: ". $codigo;
        //instanciar la clase Empleado (modelo = conexion a la tabla)
        $prestamo = new Prestamo();
        $prestamo->delete($codigo);
       
        $datos['misPrestamos']=$prestamo->orderBy('numero_prestamo','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('prestamos/lista_prestamo', $datos);
        
    }
    public function verFormularioNuevoPrestamo(){
        return view('prestamos/form_nuevo_prestamo');
    }
    public function guardarPrestamos(){
        //instanciar la clase Empleado (modelo = conexion con la tabla)
        $prestamo = new Prestamo();
        //recibir los datos de los distintos elementos del formulario
        $txtCodigo = $this->request->getVar('txtCodigo');
        $txtCodigolibro = $this->request->getVar('txtCodigolibro');
        $txtCarne = $this->request->getVar('txtCarne');
        $txtFecha = $this->request->getVar('txtFecha');
        $txtDevolucion = $this->request->getVar('txtDevolucion');
        $txtCodigoempleado = $this->request->getVar('txtCodigoempleado');
        //trasladar esos valores a la base de datos
        $datos=[
            'numero_prestamo'=>$txtCodigo,
            'codigo_libro'=>$txtCodigolibro,
            'carne_alumno'=>$txtCarne,
            'fecha_prestamo'=>$txtFecha,
            'fecha_devolucion'=>$txtDevolucion,
            'codigo_empleado'=>$txtCodigoempleado
        ];
        $prestamo->insert($datos);

        //cargar la lista
        $datos['misPrestamos']=$prestamo->orderBy('numero_prestamo','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('prestamos/lista_prestamo', $datos);
    }
    public function frmModificarPrestamo($codigo=null){
        
        $prestamo = new Prestamo();
        $datos['prestamo']=$prestamo->where('numero_prestamo',$codigo)->first();
        return view('prestamos/form_modificar_prestamo',$datos);
    }
    public function modificarPrestamo(){
        //instanciar la clase Empleado (modelo = conexion con la tabla)
        $prestamo = new Prestamo();
        //recibir los datos de los distintos elementos del formulario
        $txtCodigo = $this->request->getVar('txtCodigo');
        $txtCodigolibro = $this->request->getVar('txtCodigolibro');
        $txtCarne = $this->request->getVar('txtCarne');
        $txtFecha = $this->request->getVar('txtFecha');
        $txtDevolucion = $this->request->getVar('txtDevolucion');
        $txtCodigoempleado = $this->request->getVar('txtCodigoempleado');
        
        //trasladar esos valores a la base de datos
        $datos=[
            'numero_prestamo'=>$txtCodigo,
            'codigo_libro'=>$txtCodigolibro,
            'carne_alumno'=>$txtCarne,
            'fecha_prestamo'=>$txtFecha,
            'fecha_devolucion'=>$txtDevolucion,
            'codigo_empleado'=>$txtCodigoempleado
        ];
        $prestamo->update($txtCodigo,$datos);

        //cargar la lista
        $datos['misPrestamos']=$prestamo->orderBy('numero_prestamo','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('prestamos/lista_prestamo', $datos);
    }




}