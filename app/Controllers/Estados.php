<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Estado;
class Estados extends Controller{

    public function cargarEstados(){
        //instanciar la clase Empleado (Models con conexion a la tabla de la base de datos)
        $estado = new Estado();
        //recibir el resultado del select en un array
        $datos['misEstados']=$estado->orderBy('codigo_estado','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('estados/lista_estado', $datos);
    }

    public function eliminarEstado($codigo=null){
        //echo "Codigo: ". $codigo;
        //instanciar la clase Empleado (modelo = conexion a la tabla)
        $estado = new Estado();
        $estado->delete($codigo);
       
        $datos['misEstados']=$estado->orderBy('codigo_estado','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('estados/lista_estado', $datos);
        
    }

    public function verFormularioNuevoEstado(){
        return view('estados/form_nuevo_estado');
    }

    public function guardarEstados(){
        //instanciar la clase Empleado (modelo = conexion con la tabla)
        $estado = new Estado();
        //recibir los datos de los distintos elementos del formulario
        $txtCodigo = $this->request->getVar('txtCodigo');
        $txtNombre = $this->request->getVar('txtNombre');
        //trasladar esos valores a la base de datos
        $datos=[
            'codigo_estado'=>$txtCodigo,
            'nombre'=>$txtNombre
        ];
        $estado->insert($datos);

        //cargar la lista
        $datos['misEstados']=$estado->orderBy('codigo_estado','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('estados/lista_estado', $datos);
    }

    public function frmModificarEstado($codigo=null){
    
        $estado = new Estado();
        $datos['estado']=$estado->where('codigo_estado',$codigo)->first();
        return view('estados/form_modificar_estado', $datos);
    }
    public function modificarEstado(){
        //instanciar la clase Empleado (modelo = conexion con la tabla)
        $estado = new Estado();
        //recibir los datos de los distintos elementos del formulario
        $txtCodigo = $this->request->getVar('txtCodigo');
        $txtNombre = $this->request->getVar('txtNombre');
       

        //trasladar esos valores a la base de datos
        $datos=[
            'nombre'=>$txtNombre
        ];
        $estado->update($txtCodigo,$datos);

        //cargar la lista
        $datos['misEstados']=$estado->orderBy('codigo_estado','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('estados/lista_estado', $datos);
    }

}