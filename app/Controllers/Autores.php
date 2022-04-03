<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Autor;
class Autores extends Controller{
    

        public function cargarAutores(){
            //instanciar la clase Empleado (Models con conexion a la tabla de la base de datos)
            $autor = new Autor();
            //recibir el resultado del select en un array
            $datos['misAutores']=$autor->orderBy('codigo_autor','ASC')->findAll();
            //enviando a la vista los datos de la busqueda
            return view('autores/lista_autor', $datos);
        }

        public function eliminarAutor($codigo=null){
            //echo "Codigo: ". $codigo;
            //instanciar la clase Empleado (modelo = conexion a la tabla)
            $autor = new Autor();
            $autor->delete($codigo);
           
            $datos['misAutores']=$autor->orderBy('codigo_autor','ASC')->findAll();
            //enviando a la vista los datos de la busqueda
            return view('autores/lista_autor', $datos);
            
        }

        public function verFormularioNuevoAutor(){
            return view('autores/form_nuevo_autor');
        }

        public function guardarAutores(){
            //instanciar la clase Empleado (modelo = conexion con la tabla)
            $autor = new Autor();
            //recibir los datos de los distintos elementos del formulario
            $txtCodigo = $this->request->getVar('txtCodigo');
            $txtApellido = $this->request->getVar('txtApellido');
            $txtNombre = $this->request->getVar('txtNombre');
            $txtNacionalidad = $this->request->getVar('txtNacionalidad');
            //trasladar esos valores a la base de datos
            $datos=[
                'codigo_autor'=>$txtCodigo,
                'apellido'=>$txtApellido,
                'nombre'=>$txtNombre,
                'nacionalidad'=>$txtNacionalidad
            ];
            $autor->insert($datos);
    
            //cargar la lista
            $datos['misAutores']=$autor->orderBy('codigo_autor','ASC')->findAll();
            //enviando a la vista los datos de la busqueda
            return view('autores/lista_autor', $datos);
        }

        public function frmModificarAutor($codigo=null){
        
            $autor = new Autor();
            $datos['autor']=$autor->where('codigo_autor',$codigo)->first();
            return view('autores/form_modificar_autor',$datos);
        }
        public function modificarAutor(){
            //instanciar la clase Empleado (modelo = conexion con la tabla)
            $autor = new Autor();
            //recibir los datos de los distintos elementos del formulario
            $txtCodigo = $this->request->getVar('txtCodigo');
            $txtApellido = $this->request->getVar('txtApellido');
            $txtNombre = $this->request->getVar('txtNombre');
            $txtNacionalidad = $this->request->getVar('txtNacionalidad');
            //trasladar esos valores a la base de datos
            $datos=[
                'apellido'=>$txtApellido,
                'nombre'=>$txtNombre,
                'nacionalidad'=>$txtNacionalidad
            ];
            $autor->update($txtCodigo,$datos);
    
            //cargar la lista
            $datos['misAutores']=$autor->orderBy('codigo_autor','ASC')->findAll();
            //enviando a la vista los datos de la busqueda
            return view('autores/lista_autor', $datos);
        }
        
    }




