<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siid{

    // ********************** //
    //   CONSTANTES DE ROLES   //

    public $ROL_ADMINISTRADOR = array();
    public $ROL_DOCENTE = array();
    public $ROL_INVITADO = array();

    // ********************** //
    //   PAGINAS DEL SISTEMA   //

    public $TAREA_NONE = 1;
    public $TAREA_DASHBOARD = 2;
    public $TAREA_CURSOS = 3;
    public $TAREA_CURSOS_EDITAR = 4;
    public $TAREA_SUBCATEGORIAS =  5;
    public $TAREA_SUBCATEGORIAS_EDITAR = 6;
    public $TAREA_DOCUMENTOS = 7;
    public $TAREA_DOCUMENTOS_RECIENTES = 8;
    public $TAREA_DOCUMENTOS_EDITAR = 9;
    public $TAREA_VISUALIZAR_DOCUMENTO = 10;
    public $TAREA_MENSAJES = 11;
    public $TAREA_MENSAJE_NUEVO = 12;
    public $TAREA_NOTAS = 13;
    public $TAREA_NOTA_EDITAR = 14;
    public $TAREA_EVENTOS = 15;
    public $TAREA_EVENTO_NUEVO = 16;
    public $TAREA_EVENTO_EDITAR = 17;
    public $TAREA_HORARIOS = 18;
    public $TAREA_HORARIOS_EDITAR = 19;
    public $TAREA_DOCENTES = 20;
    public $TAREA_DOCENTE_EDITAR = 21;
    public $TAREA_INVITADOS = 22;
    public $TAREA_INVITADO_EDITAR = 23;
    public $TAREA_HERRAMIENTAS  = 24;
    public $TAREA_LEER_MENSAJES  = 50;
    public $TAREA_ELIMINAR_DOCENTE = 51;
    public $TAREA_ENCENDER_PROYECTOR = 52;

    // ********************** //
    //   PAGINAS DE INICIO   //

    public $PAGINA_INICIO = 100;

    function __construct(){
        $this->ROL_ADMINISTRADOR['clave'] = 1;
        $this->ROL_ADMINISTRADOR['nombre'] = 'Administrador';

        $this->ROL_DOCENTE['clave'] = 2;
        $this->ROL_DOCENTE['nombre'] = 'Docente';

        $this->ROL_INVITADO['clave'] = 3;
        $this->ROL_INVITADO['nombre'] = 'Invitado';
    }//end __construct
}//end class siid

?>
