<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
$routes->get('listar_empleados', 'Empleados::cargarEmpleados');
$routes->get('hola', 'Empleados::cargarEmpleados');
$routes->get('ruta','NombreControlador::metodoEjecutar');
$routes->get('eliminar_empleado/(:num)', 'Empleados::eliminarEmpleado/$1');
//GUARDAR EMPLEADO
$routes->get('ver_formulario_nuevo_empleado','Empleados::verFormularioNuevoEmpleado');
$routes->get('guardarEmpleado','Empleados::guardarEmpleados');
//MODIFICAR EMPLEADO
$routes->get('frm_modificar_empleado/(:num)','Empleados::frmModificarEmpleado/$1');
$routes->get('modificarEmpleado','Empleados::ModificarEmpleado');
//LISTAR AUTOR
$routes->get('listar_autores', 'Autores::cargarAutores');
//ELIMINAR AUTOR
$routes->get('eliminar_autor/(:num)', 'Autores::eliminarAutor/$1');
//GUARDAR AUTOR
$routes->get('ver_formulario_nuevo_autor','Autores::verFormularioNuevoAutor');
$routes->get('guardarAutor','Autores::guardarAutores');
//MODIFICAR AUTOR
$routes->get('frm_modificar_autor/(:num)','Autores::frmModificarAutor/$1');
$routes->get('modificarAutor','Autores::ModificarAutor');


//LISTAR EDITORIAL
$routes->get('listar_editoriales', 'Editoriales::cargarEditoriales');
//ELIMINAR EDITORIAL
$routes->get('eliminar_editorial/(:num)', 'Editoriales::eliminarEditorial/$1');
//GUARDAR EDITORIAL
$routes->get('ver_formulario_nuevo_editorial','Editoriales::verFormularioNuevoEditorial');
$routes->get('guardarEditorial','Editoriales::guardarEditoriales');
//MODIFICAR EDITORIAL
$routes->get('frm_modificar_editorial/(:num)','Editoriales::frmModificarEditorial/$1');
$routes->get('modificarEditorial','Editoriales::ModificarEditorial');

//LISTAR LIBROS
$routes->get('listar_libros', 'Libros::cargarLibros');
//ELIMINAR LIBROS
$routes->get('eliminar_libro/(:num)', 'Libros::eliminarLibro/$1');
//GUARDAR LIBROS
$routes->get('ver_formulario_nuevo_libro','Libros::verFormularioNuevoLibro');
$routes->get('guardarEstado','Estados::guardarLibros');
//MODIFICAR LIBROS
$routes->get('frm_modificar_libro/(:num)','Libros::frmModificarLibro/$1');
$routes->get('modificarLibro','Libros::ModificarLibro');

//LISTAR ESTADOS
$routes->get('listar_estados', 'Estados::cargarEstados');
//ELIMINAR ESTADOS
$routes->get('eliminar_estado/(:num)', 'Estados::eliminarEstado/$1');
//GUARDAR ESTADOS
$routes->get('ver_formulario_nuevo_estado','Estados::verFormularioNuevoEstado');
$routes->get('guardarEstado','Estados::guardarEstados');
//MODIFICAR ESTADOS
$routes->get('frm_modificar_estado/(:num)','Estados::frmModificarEstado/$1');
$routes->get('modificarEstado','Estados::ModificarEstado');


//LISTAR GRADOS
$routes->get('listar_grados', 'Grados::cargarGrados');
//ELIMINAR GRADOS
$routes->get('eliminar_grado/(:num)', 'Grados::eliminarGrado/$1');
//GUARDAR GRADOS
$routes->get('ver_formulario_nuevo_grado','Grados::verFormularioNuevoGrado');
$routes->get('guardarGrado','Grados::guardarGrados');
//MODIFICAR GRADOS
$routes->get('frm_modificar_grado/(:num)','Grados::frmModificarGrado/$1');
$routes->get('modificarGrado','Grados::ModificarGrado');

//LISTAR ESTUDIANTES
$routes->get('listar_estudiantes', 'Estudiantes::cargarEstudiantes');
//ELIMINAR ESTUDIANTE
$routes->get('eliminar_estudiante/(:num)', 'Estudiantes::eliminarEstudiante/$1');
//GUARDAR ESTUDIANTE
$routes->get('ver_formulario_nuevo_estudiante','Estudiantes::verFormularioNuevoEstudiante');
$routes->get('guardarEstudiante','Estudiantes::guardarEstudiantes');
//MODIFICAR ESTUDIANTE
$routes->get('frm_modificar_estudiante/(:num)','Estudiantes::frmModificarEstudiante/$1');
$routes->get('modificarEstudiante','Estudiantes::ModificarEstudiante');

//LISTAR PRESTAMOS
$routes->get('listar_prestamos', 'Prestamos::cargarPrestamos');
//ELIMINAR PRESTAMOS
$routes->get('eliminar_prestamo/(:num)', 'Prestamos::eliminarPrestamo/$1');
//GUARDAR PRESTAMOS
$routes->get('ver_formulario_nuevo_prestamo','Prestamos::verFormularioNuevoPrestamo');
$routes->get('guardarPrestamo','Prestamos::guardarPrestamos');
//MODIFICAR PRESTAMOS
$routes->get('frm_modificar_prestamo/(:num)','Prestamos::frmModificarPrestamo/$1');
$routes->get('modificarPrestamo','Prestamos::ModificarPrestamo');


//$routes->get('nombre_ruta','nombre_controlador::nombre_metodo');