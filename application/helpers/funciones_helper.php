<?php
if(!function_exists("fechaActual")){
    function fechaActual(){
        $CI =& get_instance();
        $CI->load->helper('date');
        return unix_to_human(now(),true,"mx");
    }//end of function fechaActual
}//end of function fechaActual

if(!function_exists("mensaje")){
    function mensaje($texto, $tipo = 5, $titulo = ""){
        $mensaje = array();
        $mensaje['texto'] = $texto;
        $mensaje['tipo'] = $tipo;
        $mensaje['titulo'] = $titulo;

        $CI =& get_instance();
        $CI->load->library('session');
        $CI->session->mensaje = $mensaje;
    }//end of function asignar_mensaje
}//end of function_exists

if(!function_exists("limpiar_mensaje")){
    function limpiar_mensaje(){
        $CI =& get_instance();
        $CI->load->library('session');
        $CI->session->mensaje = NULL;
    }//end of function limpiar_mensaje
}//end of function_exists

if(!function_exists("mostrar_mensaje")){
    function mostrar_mensaje(){
        $CI =& get_instance();
        $CI->load->library('session');
        $mensaje = $CI->session->mensaje;
        $CI->session->mensaje = NULL;

        //Retorna null si no hay mensaje
        if($mensaje == NULL){
            return "";
        }//end if mensaje null

        $tipoMensaje  = '';
        switch($mensaje['tipo']){
            case 1:
                $tipoMensaje = "success";
            break;
            case 2:
                $tipoMensaje = "danger";
            break;
            case 3:
                $tipoMensaje = "info";
            break;
            case 4:
                $tipoMensaje = "warning";
            break;
            default:
                $tipoMensaje = "success";
            break;
        }//end of switch

        $html = '
            $.notify({
                title: "<strong>'.$mensaje['titulo'].'</strong>",
                message: "'.$mensaje['texto'].'"
            },{
                type: "'.$tipoMensaje.'",
                allow_dismiss: false,
                animate: {enter: "animated fadeInRight", exit: "animated fadeOutRight"},
                // delay: 1000
                // showProgressbar: true
            });
        ';



        return $html;

    }//end of function mostrar_mensaje
}//end of function_exists