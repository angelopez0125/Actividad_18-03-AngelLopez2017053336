<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Estudiante;

class Estudiantes extends Controller{

    public function cargarEstudiantes(){
        //instanciar la clase Empleado (Models con conexion a la tabla de la base de datos)
        $estudiante = new Estudiante();
        //recibir el resultado del select en un array
        $datos['misEstudiantes']=$estudiante->orderBy('carne_alumno','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('estudiantes/lista_estudiante', $datos);
    }

    public function eliminarEstudiante($codigo=null){
        //echo "Codigo: ". $codigo;
        //instanciar la clase Empleado (modelo = conexion a la tabla)
        $estudiante = new Estudiante();
        $estudiante->delete($codigo);
       
        $datos['misEstudiantes']=$estudiante->orderBy('carne_alumno','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('estudiantes/lista_estudiante', $datos);
        
    }

    public function verFormularioNuevoEstudiante(){
        return view('estudiantes/form_nuevo_estudiante');
    }

    public function guardarEstudiantes(){
        //instanciar la clase Empleado (modelo = conexion con la tabla)
        $estudiante = new Estudiante();
        //recibir los datos de los distintos elementos del formulario
        $txtCarne = $this->request->getVar('txtCarne');
        $txtNombre = $this->request->getVar('txtNombre');
        $txtApellido = $this->request->getVar('txtApellido');
        $txtDireccion = $this->request->getVar('txtDireccion');
        $txtTelefono = $this->request->getVar('txtTelefono');
        $txtEmail = $this->request->getVar('txtEmail');
        $txtFecha = $this->request->getVar('txtFecha');
        $txtCodigogrado = $this->request->getVar('txtCodigogrado');
        //trasladar esos valores a la base de datos
        $datos=[
            'carne_alumno'=>$txtCarne,
            'nombre'=>$txtNombre,
            'apellido'=>$txtApellido,
            'direccion'=>$txtDireccion,
            'telefono'=>$txtTelefono,
            'email'=>$txtEmail,
            'fechanacimiento'=>$txtFecha,
            'codigo_grado'=>$txtCodigogrado
        ];
        $estudiante->insert($datos);

        //cargar la lista
        $datos['misEstudiantes']=$estudiante->orderBy('carne_alumno','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('estudiantes/lista_estudiante', $datos);
    }

    public function frmModificarEstudiante($codigo=null){
    
        $estudiante = new Estudiante();
        $datos['estudiante']=$estudiante->where('carne_alumno',$codigo)->first();
        return view('estudiantes/form_modificar_estudiante', $datos);
    }
    public function modificarEstudiante(){
        //instanciar la clase Empleado (modelo = conexion con la tabla)
        $estudiante = new Estudiante();
        //recibir los datos de los distintos elementos del formulario
        $txtCarne = $this->request->getVar('txtCarne');
        $txtNombre = $this->request->getVar('txtNombre');
        $txtApellido = $this->request->getVar('txtApellido');
        $txtDireccion = $this->request->getVar('txtDireccion');
        $txtTelefono = $this->request->getVar('txtTelefono');
        $txtEmail = $this->request->getVar('txtEmail');
        $txtFecha = $this->request->getVar('txtFecha');
        $txtCodigogrado = $this->request->getVar('txtCodigogrado');
        //trasladar esos valores a la base de datos
        $datos=[
            'carne_alumno'=>$txtCarne,
            'nombre'=>$txtNombre,
            'apellido'=>$txtApellido,
            'direccion'=>$txtDireccion,
            'telefono'=>$txtTelefono,
            'email'=>$txtEmail,
            'fechanacimiento'=>$txtFecha,
            'codigo_grado'=>$txtCodigogrado
        ];
        $estudiante->update($txtCarne,$datos);

        //cargar la lista
        $datos['misEstudiantes']=$estudiante->orderBy('carne_alumno','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('estudiantes/lista_estudiante', $datos);
    }



}