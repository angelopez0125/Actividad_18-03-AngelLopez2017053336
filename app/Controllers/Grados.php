<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Grado;
class Grados extends Controller{

    public function cargarGrados(){
        //instanciar la clase Empleado (Models con conexion a la tabla de la base de datos)
        $grado = new Grado();
        //recibir el resultado del select en un array
        $datos['misGrados']=$grado->orderBy('codigo_grado','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('grados/lista_grado', $datos);
    }

    public function eliminarGrado($codigo=null){
        //echo "Codigo: ". $codigo;
        //instanciar la clase Empleado (modelo = conexion a la tabla)
        $grado = new Grado();
        $grado->delete($codigo);
       
        $datos['misGrados']=$grado->orderBy('codigo_grado','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('grados/lista_grado', $datos);
        
    }

    public function verFormularioNuevoGrado(){
        return view('grados/form_nuevo_grado');
    }

    public function guardarGrados(){
        //instanciar la clase Empleado (modelo = conexion con la tabla)
        $grado = new Grado();
        //recibir los datos de los distintos elementos del formulario
        $txtCodigo = $this->request->getVar('txtCodigo');
        $txtNombre = $this->request->getVar('txtNombre');
        //trasladar esos valores a la base de datos
        $datos=[
            'codigo_grado'=>$txtCodigo,
            'nombre'=>$txtNombre
        ];
        $grado->insert($datos);

        //cargar la lista
        $datos['misGrados']=$grado->orderBy('codigo_grado','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('grados/lista_grado', $datos);
    }

    public function frmModificarGrado($codigo=null){
    
        $grado = new Grado();
        $datos['grado']=$grado->where('codigo_grado',$codigo)->first();
        return view('grados/form_modificar_grado', $datos);
    }
    public function modificarGrado(){
        //instanciar la clase Empleado (modelo = conexion con la tabla)
        $grado = new Grado();
        //recibir los datos de los distintos elementos del formulario
        $txtCodigo = $this->request->getVar('txtCodigo');
        $txtNombre = $this->request->getVar('txtNombre');
       

        //trasladar esos valores a la base de datos
        $datos=[
            'nombre'=>$txtNombre
        ];
        $grado->update($txtCodigo,$datos);

        //cargar la lista
        $datos['misGrados']=$grado->orderBy('codigo_grado','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('grados/lista_grado', $datos);
    }
}