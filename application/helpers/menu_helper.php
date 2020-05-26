<?php
if ( !function_exists('get_menu_lateral')) {
    function get_menu($rol_actual) {
        $CI =& get_instance();
        $CI->load->library('siid');
        $menu = array();
        $menuItem = array();

        $menuItem = array();
        $menuItem['isActive'] = FALSE;
        $menuItem['href'] = base_url('principal/'.$CI->siid->TAREA_DASHBOARD);
        $menuItem['icon'] = 'fa fa-home';
        $menuItem['text'] = 'Inicio';
        $menuItem['subMenu'] = array();
        $menu['dashboard'] = $menuItem;

        if(in_array($rol_actual,array($CI->siid->ROL_DOCENTE['clave']))){
            //menú cursos
            $menuItem = array();
            $menuItem['isActive'] = FALSE;
            $menuItem['href'] = '#';
            $menuItem['icon'] = 'fa fa-file-text-o';
            $menuItem['text'] = 'Cursos';
            $menuItem['subMenu'] = array();

            //submenú todos los cursos
            $subMenuItem = array();
            $subMenuItem['isActive'] = FALSE;
            $subMenuItem['href'] = base_url('principal/'.$CI->siid->TAREA_CURSOS);
            $subMenuItem['text'] = 'Todos';
            $menuItem['subMenu']['todos'] = $subMenuItem;
            $menu['Cursos'] = $menuItem;

            //submenú cursos editar
            $subMenuItem = array();
            $subMenuItem['isActive'] = FALSE;
            $subMenuItem['href'] = base_url('principal/'.$CI->siid->TAREA_CURSOS_EDITAR);
            $subMenuItem['text'] = 'Editar cursos';
            $menuItem['subMenu']['editar_cursos'] = $subMenuItem;
            $menu['Cursos'] = $menuItem;

            // //submenú cursos documentos - prueba
            // $subMenuItem = array();
            // $subMenuItem['isActive'] = FALSE;
            // $subMenuItem['href'] = base_url('principal/'.$CI->siid->TAREA_VISUALIZAR_DOCUMENTO);
            // $subMenuItem['text'] = 'Ver documentos';
            // $menuItem['subMenu']['ver_cursos'] = $subMenuItem;
            // $menu['Cursos'] = $menuItem;

        }//end if menu cursos

        if(in_array($rol_actual,array($CI->siid->ROL_ADMINISTRADOR['clave']))){
            //menú usuarios
            $menuItem = array();
            $menuItem['isActive'] = FALSE;
            $menuItem['href'] = '#';
            $menuItem['icon'] = 'fa fa-file-text-o';
            $menuItem['text'] = 'Usuarios';
            $menuItem['subMenu'] = array();

            //submenú usuarios docentes
            $subMenuItem = array();
            $subMenuItem['isActive'] = FALSE;
            $subMenuItem['href'] = base_url('principal/'.$CI->siid->TAREA_DOCENTES);
            $subMenuItem['text'] = 'Docentes';
            $menuItem['subMenu']['docentes'] = $subMenuItem;
            $menu['Cursos'] = $menuItem;

            //submenú usuarios invitados
            // $subMenuItem = array();
            // $subMenuItem['isActive'] = FALSE;
            // $subMenuItem['href'] = base_url('principal/'.$CI->siid->TAREA_INVITADOS);
            // $subMenuItem['text'] = 'Invitados';
            // $menuItem['subMenu']['invitados'] = $subMenuItem;
            // $menu['Cursos'] = $menuItem;

        }//end if menu usuarios

        if(in_array($rol_actual,array($CI->siid->ROL_ADMINISTRADOR['clave'],
                                      $CI->siid->ROL_DOCENTE['clave'],
                                      $CI->siid->ROL_INVITADO['clave']))){
            //menú notas
            $menuItem = array();
            $menuItem['isActive'] = FALSE;
            $menuItem['href'] = '#';
            $menuItem['icon'] = 'fa fa-sticky-note ';
            $menuItem['text'] = 'Notas';
            $menuItem['subMenu'] = array();

            //submenú notas todas
            $subMenuItem = array();
            $subMenuItem['isActive'] = FALSE;
            $subMenuItem['href'] = base_url('principal/'.$CI->siid->TAREA_NOTAS);
            $subMenuItem['text'] = 'Mis notas';
            $menuItem['subMenu']['mis_notas'] = $subMenuItem;
            $menu['notas'] = $menuItem;

            //submenú editar
            $subMenuItem = array();
            $subMenuItem['isActive'] = FALSE;
            $subMenuItem['href'] = base_url('principal/'.$CI->siid->TAREA_NOTAS);
            $subMenuItem['text'] = 'Mis notas';
            $menuItem['subMenu']['mis_notas'] = $subMenuItem;
            $menu['notas'] = $menuItem;

        }//end if menu notas

        if(in_array($rol_actual,array($CI->siid->ROL_ADMINISTRADOR['clave'],
                                      $CI->siid->ROL_DOCENTE['clave']))){
            //menú mensaje
            $menuItem = array();
            $menuItem['isActive'] = FALSE;
            $menuItem['href'] = '#';
            $menuItem['icon'] = 'fa fa-envelope';
            $menuItem['text'] = 'Mensajes';
            $menuItem['subMenu'] = array();

            //submenú mensajes
            $subMenuItem = array();
            $subMenuItem['isActive'] = FALSE;
            $subMenuItem['href'] = base_url('principal/'.$CI->siid->TAREA_MENSAJES);
            $subMenuItem['text'] = 'Mis mensajes';
            $menuItem['subMenu']['mis_mensajes'] = $subMenuItem;
            $menu['mensajes'] = $menuItem;

            //submenú mensajes
            $subMenuItem = array();
            $subMenuItem['isActive'] = FALSE;
            $subMenuItem['href'] = base_url('principal/'.$CI->siid->TAREA_MENSAJE_NUEVO);
            $subMenuItem['text'] = 'Nuevo mensaje';
            $menuItem['subMenu']['mensaje_nuevo'] = $subMenuItem;
            $menu['mensajes'] = $menuItem;

        }//end if menu mensajes

        if(in_array($rol_actual,array($CI->siid->ROL_ADMINISTRADOR['clave'],
                                      $CI->siid->ROL_DOCENTE['clave']))){
            //menú eventos
            $menuItem = array();
            $menuItem['isActive'] = FALSE;
            $menuItem['href'] = '#';
            $menuItem['icon'] = 'fa fa-calendar';
            $menuItem['text'] = 'Eventos';
            $menuItem['subMenu'] = array();

            //submenú mensajes
            $subMenuItem = array();
            $subMenuItem['isActive'] = FALSE;
            $subMenuItem['href'] = base_url('principal/'.$CI->siid->TAREA_EVENTOS);
            $subMenuItem['text'] = 'Mis eventos';
            $menuItem['subMenu']['mis_eventos'] = $subMenuItem;
            $menu['eventos'] = $menuItem;

            // //submenú mensajes
            // $subMenuItem = array();
            // $subMenuItem['isActive'] = FALSE;
            // $subMenuItem['href'] = base_url('principal/'.$CI->siid->TAREA_MENSAJE_NUEVO);
            // $subMenuItem['text'] = 'Evento nuevo';
            // $menuItem['subMenu']['evento_nuevo'] = $subMenuItem;
            // $menu['mensajes'] = $menuItem;

        }//end if menu mensajes

        if(in_array($rol_actual,array($CI->siid->ROL_INVITADO['clave']))){
            //menú mensaje invitado
            $menuItem = array();
            $menuItem['isActive'] = FALSE;
            $menuItem['href'] = '#';
            $menuItem['icon'] = 'fa fa-envelope';
            $menuItem['text'] = 'Mensajes';
            $menuItem['subMenu'] = array();

            //submenú mensajes invitado
            $subMenuItem = array();
            $subMenuItem['isActive'] = FALSE;
            $subMenuItem['href'] = base_url('principal/'.$CI->siid->TAREA_MENSAJES);
            $subMenuItem['text'] = 'Mis mensajes';
            $menuItem['subMenu']['mis_mensajes'] = $subMenuItem;
            $menu['mensajes'] = $menuItem;

        }//end if menu mensajes

        // if(in_array($rol_actual,array($CI->siid->ROL_ADMINISTRADOR['clave'],
        //                               $CI->siid->ROL_DOCENTE['clave'],
        //                               $CI->siid->ROL_INVITADO['clave']))){
        //     //menú herramientas
        //     $menuItem = array();
        //     $menuItem['isActive'] = FALSE;
        //     $menuItem['href'] = base_url('principal/'.$CI->siid->TAREA_HERRAMIENTAS);
        //     $menuItem['icon'] = 'fa fa-cogs';
        //     $menuItem['text'] = 'Herramientas';
        //     $menuItem['subMenu'] = array();
        //
        //     $menu['herramientas'] = $menuItem;
        //
        // }//end if menu mensajes

        if(in_array($rol_actual,array($CI->siid->ROL_DOCENTE['clave']))){
            //menú Encender proyector
            $menuItem = array();
            $menuItem['isActive'] = FALSE;
            $menuItem['href'] = base_url('principal/'.$CI->siid->TAREA_ENCENDER_PROYECTOR);
            $menuItem['icon'] = 'fa fa-tv';
            $menuItem['text'] = 'Proyector';
            $menuItem['subMenu'] = array();

            $menu['proyector'] = $menuItem;

        }//end if menu mensajes

        return $menu;
    }//end function get_menu
}//end if function get_menu

if(!function_exists('activar_items')){
    function activar_items($tarea_actual, $menu){
        $CI =& get_instance();
        $CI->load->library('siid');
        if($tarea_actual == $CI->siid->TAREA_DASHBOARD){
            $menu['dashboard']['isActive'] = TRUE;
        }//end if tarea Dashboard
        if($tarea_actual == $CI->siid->TAREA_CURSOS){
            $menu['Cursos']['isActive'] == TRUE;
            $menu['Cursos']['subMenu']['todos']['isActive'] = TRUE;
        }//end if tarea cursos
        if($tarea_actual == $CI->siid->TAREA_SUBCATEGORIAS){
            $menu['Cursos']['isActive'] == TRUE;
            $menu['Cursos']['subMenu']['todos']['isActive'] = TRUE;
        }//end if tarea subcategorias
        if($tarea_actual == $CI->siid->TAREA_CURSOS_EDITAR){
            $menu['Cursos']['isActive'] == TRUE;
            $menu['Cursos']['subMenu']['editar_cursos']['isActive'] = TRUE;
        }//end if tarea cursos editar
        if($tarea_actual == $CI->siid->TAREA_NOTAS){
            $menu['notas']['isActive'] == TRUE;
            $menu['notas']['subMenu']['mis_notas']['isActive'] = TRUE;
        }//end if tarea notas
        if($tarea_actual == $CI->siid->TAREA_NOTA_EDITAR){
            $menu['notas']['isActive'] == TRUE;
            $menu['notas']['subMenu']['mis_notas']['isActive'] = TRUE;
        }//end if tarea notas
        if($tarea_actual == $CI->siid->TAREA_MENSAJES){
            $menu['mensajes']['isActive'] == TRUE;
            $menu['mensajes']['subMenu']['mis_mensajes']['isActive'] = TRUE;
        }//end if tarea mensajes
        if($tarea_actual == $CI->siid->TAREA_MENSAJE_NUEVO){
            $menu['mensajes']['isActive'] == TRUE;
            $menu['mensajes']['subMenu']['mensaje_nuevo']['isActive'] = TRUE;
        }//end if tarea mensajes nuevo
        if($tarea_actual == $CI->siid->TAREA_EVENTOS){
            $menu['eventos']['isActive'] == TRUE;
            $menu['eventos']['subMenu']['mis_eventos']['isActive'] = TRUE;
        }//end if tarea mensajes nuevo
        if($tarea_actual == $CI->siid->TAREA_ENCENDER_PROYECTOR){
            $menu['proyector']['isActive'] == TRUE;
        }//end if tarea proyector
        return $menu;
    }//end function activar_items
}//end if activar items

if(!function_exists('crear_menu_lateral')){
    function crear_menu_lateral($tarea_actual, $rol_actual){
        $CI =& get_instance();
        $CI->load->helper('menu_helper');

        $menu = get_menu($rol_actual);
        $menu = activar_items($tarea_actual, $menu);
        $html = '';
        // debug($menu);
        foreach ($menu as $menu_item) {
            if($menu_item['href'] != '#'){
                $html .= '<li class="'.(($menu_item['isActive'])?'active':'').'  color-1">';
                $html .= '<a href="'.$menu_item['href'].'" class="dropdown-toggle"  role="button" aria-haspopup="true">
                <i class="'.$menu_item['icon'].' bg-color-1" ></i> <span>'.$menu_item['text'].'</span>
                </a>';
            }
            else{
                $html .= '<li class="'.(($menu_item['isActive'])?'active':'').' dropdown singleDrop color-1">';
                $html .= '<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="'.$menu_item['icon'].' bg-color-1" aria-hidden="true"></i> <span>'.$menu_item['text'].'</span>
                </a>';
            }
            if(sizeof($menu_item['subMenu'])>0){
                $html .= '<ul class="dropdown-menu dropdown-menu-left ">';
                foreach ($menu_item['subMenu'] as $subMenuItem) {
                    $html .= '<li class="'.(($subMenuItem['isActive'])?'active':'').'"><a href="'.$subMenuItem['href'].'">'.$subMenuItem['text'].'</a></li>';
                }
                $html .= '</ul>';
            }
            else{
                $html .= '</li>';
            }
        }//end foreach
        return $html;
    }//end function crear_menu_lateral
}//end crear_menu_lateral
?>
