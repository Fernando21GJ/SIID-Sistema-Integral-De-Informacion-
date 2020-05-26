<?php
if(!function_exists('is_rol_permitido')){
    function is_rol_permitido($claveTarea=-1, $claveRol=-1){
        $permiso = FALSE;
        $CI =& get_instance();
        switch($claveTarea){
            //**************************************************
            case $CI->siid->TAREA_DASHBOARD:
                $rolesPermitidos = array(
                                        $CI->siid->ROL_DOCENTE['clave'],
                                        $CI->siid->ROL_ADMINISTRADOR['clave'],
                                        $CI->siid->ROL_INVITADO['clave'],
                                        );
                $permiso = in_array($claveRol, $rolesPermitidos);
            break;
            //**************************************************
            case $CI->siid->TAREA_CURSOS:
                $rolesPermitidos = array(
                                        $CI->siid->ROL_DOCENTE['clave'],
                                        );
                $permiso = in_array($claveRol, $rolesPermitidos);
            break;
            //**************************************************
            case $CI->siid->TAREA_CURSOS_EDITAR:
                $rolesPermitidos = array(
                                        $CI->siid->ROL_DOCENTE['clave'],
                                        );
                $permiso = in_array($claveRol, $rolesPermitidos);
            break;
            //**************************************************
            case $CI->siid->TAREA_MENSAJES:
                $rolesPermitidos = array(
                                        $CI->siid->ROL_DOCENTE['clave'],
                                        $CI->siid->ROL_ADMINISTRADOR['clave'],
                                        $CI->siid->ROL_INVITADO['clave'],
                                        );
                $permiso = in_array($claveRol, $rolesPermitidos);
            break;
            //**************************************************
            case $CI->siid->TAREA_MENSAJE_NUEVO:
                $rolesPermitidos = array(
                                        $CI->siid->ROL_DOCENTE['clave'],
                                        $CI->siid->ROL_ADMINISTRADOR['clave'],
                                        );
                $permiso = in_array($claveRol, $rolesPermitidos);
            break;
            //**************************************************
            case $CI->siid->TAREA_EVENTOS:
                $rolesPermitidos = array(
                                        $CI->siid->ROL_DOCENTE['clave'],
                                        $CI->siid->ROL_ADMINISTRADOR['clave'],
                                        );
                $permiso = in_array($claveRol, $rolesPermitidos);
            break;
            //**************************************************

            case $CI->siid->TAREA_DOCUMENTOS:
                $rolesPermitidos = array(
                                        $CI->siid->ROL_DOCENTE['clave'],
                                        );
                $permiso = in_array($claveRol, $rolesPermitidos);
            break;
            //**************************************************
            case $CI->siid->TAREA_VISUALIZAR_DOCUMENTO:
                $rolesPermitidos = array(
                                        $CI->siid->ROL_DOCENTE['clave'],
                                        );
                $permiso = in_array($claveRol, $rolesPermitidos);
            break;
            //**************************************************
            case $CI->siid->TAREA_SUBCATEGORIAS:
                $rolesPermitidos = array(
                                        $CI->siid->ROL_DOCENTE['clave']

                                        );
                $permiso = in_array($claveRol, $rolesPermitidos);
            break;
            //**************************************************

            case $CI->siid->TAREA_LEER_MENSAJES:
                $rolesPermitidos = array(
                                        $CI->siid->ROL_DOCENTE['clave'],
                                        $CI->siid->ROL_ADMINISTRADOR['clave'],
                                        $CI->siid->ROL_INVITADO['clave'],
                                        );
                $permiso = in_array($claveRol, $rolesPermitidos);
            break;
            //**************************************************
            case $CI->siid->TAREA_NOTAS:
                $rolesPermitidos = array(
                                        $CI->siid->ROL_DOCENTE['clave'],
                                        $CI->siid->ROL_ADMINISTRADOR['clave'],
                                        $CI->siid->ROL_INVITADO['clave'],
                                        );
                $permiso = in_array($claveRol, $rolesPermitidos);
            break;
            //**************************************************
            case $CI->siid->TAREA_ENCENDER_PROYECTOR:
                $rolesPermitidos = array(
                                        $CI->siid->ROL_DOCENTE['clave'],
                                        );
                $permiso = in_array($claveRol, $rolesPermitidos);
            break;
            //**************************************************
            default:

            break;
        }//end switch tareas

        return $permiso;
    }//end function is_rol_permitido
}//end if no existe function permisos
?>
