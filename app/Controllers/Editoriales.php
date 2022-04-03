<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Editorial;
class Editoriales extends Controller{

    public function cargarEditoriales(){
        //instanciar la clase Empleado (Models con conexion a la tabla de la base de datos)
        $editorial = new Editorial();
        //recibir el resultado del select en un array
        $datos['misEditoriales']=$editorial->orderBy('codigo_editorial','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('editoriales/lista_editorial', $datos);
    }

    public function eliminarEditorial($codigo=null){
        //echo "Codigo: ". $codigo;
        //instanciar la clase Empleado (modelo = conexion a la tabla)
        $editorial = new Editorial();
        $editorial->delete($codigo);
       
        $datos['misEditoriales']=$editorial->orderBy('codigo_editorial','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('editoriales/lista_editorial', $datos);
        
    }

    public function verFormularioNuevoEditorial(){
        return view('editoriales/form_nuevo_editorial');
    }

    public function guardarEditoriales(){
        //instanciar la clase Empleado (modelo = conexion con la tabla)
        $editorial = new Editorial();
        //recibir los datos de los distintos elementos del formulario
        $txtCodigo = $this->request->getVar('txtCodigo');
        $txtNombre = $this->request->getVar('txtNombre');
        $txtDireccion = $this->request->getVar('txtDireccion');
        $txtTelefono = $this->request->getVar('txtTelefono');
        $txtEmail = $this->request->getVar('txtEmail');
        //trasladar esos valores a la base de datos
        $datos=[
            'codigo_editorial'=>$txtCodigo,
            'nombre'=>$txtNombre,
            'direccion'=>$txtDireccion,
            'telefono'=>$txtTelefono,
            'email'=>$txtEmail
        ];
        $editorial->insert($datos);

        //cargar la lista
        $datos['misEditoriales']=$editorial->orderBy('codigo_editorial','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('editoriales/lista_editorial', $datos);
    }

    public function frmModificarEditorial($codigo=null){
    
        $editorial = new Editorial();
        $datos['editorial']=$editorial->where('codigo_editorial',$codigo)->first();
        return view('editoriales/form_modificar_editorial',$datos);
    }
    public function modificarEditorial(){
        //instanciar la clase Empleado (modelo = conexion con la tabla)
        $editorial = new Editorial();
        //recibir los datos de los distintos elementos del formulario
        $txtCodigo = $this->request->getVar('txtCodigo');
        $txtNombre = $this->request->getVar('txtNombre');
        $txtDireccion = $this->request->getVar('txtDireccion');
        $txtTelefono = $this->request->getVar('txtTelefono');
        $txtEmail = $this->request->getVar('txtEmail');

        //trasladar esos valores a la base de datos
        $datos=[
            'nombre'=>$txtNombre,
            'direccion'=>$txtDireccion,
            'telefono'=>$txtTelefono,
            'email'=>$txtEmail
        ];
        $editorial->update($txtCodigo,$datos);

        //cargar la lista
        $datos['misEditoriales']=$editorial->orderBy('codigo_editorial','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('editoriales/lista_editorial', $datos);
    }





}