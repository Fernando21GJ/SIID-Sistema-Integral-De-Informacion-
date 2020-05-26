<?php
class Operacionesdb extends CI_Model{

    function __construct(){
        $this->load->library('siid');
    }//end __construct

    public function importar(){
        $query = '';
		$sqlScript = file(base_url('/recursos/siid.sql'));
		foreach ($sqlScript as $line)   {

	        $startWith = substr(trim($line), 0 ,2);
	        $endWith = substr(trim($line), -1 ,1);

	        if (empty($line) || $startWith == '--' || $startWith == '/*' || $startWith == '//') {
                continue;
	        }//end if lineas de comentarios

	        $query = $query . $line;
	        if ($endWith == ';') {
                if (!$this->db->simple_query($query)){
                    echo '<div class="error-response sql-import-response">Problem in executing the SQL query <b>' . $query. '</b></div>';
                }//end if error al ejecutar query
                $query= '';
	        }//end if fin linea de query
		}//end foreach
		echo '<div class="success-response sql-import-response">SQL siid file imported successfully</div>';
    }//end function importar

    public function seed_usuario(){
        $data = array(
            array('nombre'=>'Carlos David', 'paterno'=>'Moctezuma', 'materno'=>'Ortiz', 'rol'=>$this->siid->ROL_ADMINISTRADOR['clave'], 'email'=>'adm@siid.com', 'password'=>hash('sha256', 'AdM123')),
            array('nombre'=>'Candy', 'paterno'=>'Atonal', 'materno'=>'Nolasco', 'rol'=>$this->siid->ROL_DOCENTE['clave'], 'email'=>'candy@siid.com', 'password'=>hash('sha256', 'Candy123')),
            array('nombre'=>'Gerardo', 'paterno'=>'Carrillo', 'materno'=>'Juárez', 'rol'=>$this->siid->ROL_INVITADO['clave'], 'email'=>'invitado@siid.com', 'password'=>hash('sha256', '12345')),
        );
        $this->db->insert_batch('usuario', $data);
        echo 'Tabla usuario ... Registros creados: '.sizeof($data).'<br>';
        echo json_encode($data);
        echo '<hr>';
    }//end function seed_usuario

    public function seed_cursos(){
        $data = array(
            array('curso'=>'Implementación de base de datos','descripcion'=>'Esta es un texto de ejemplo', 'imagen'=>'documentos/img_cursos/data.png'),
            array('curso'=>'Análisis de base de datos','descripcion'=>'Este es un texto de ejemplo', 'imagen'=>'documentos/img_cursos/data.png'),
            array('curso'=>'Diseño de base de datos','descripcion'=>'Este es un texto de ejemplp', 'imagen'=>'documentos/img_cursos/data.png')
        );
        $this->db->insert_batch('cursos', $data);
        echo 'Tabla cursos ... Registros creados: '.sizeof($data).'<br>';
        echo json_encode($data);
        echo '<hr>';
    }//end function seed_cursos

    public function seed_usuario_curso(){
        $data = array(
            array('id_usuario'=>2,'id_curso'=>1),
            array('id_usuario'=>2,'id_curso'=>2),
            array('id_usuario'=>2,'id_curso'=>3)
        );
        $this->db->insert_batch('usuario_curso', $data);
        echo 'Tabla usuario_curso ... Registros creados: '.sizeof($data).'<br>';
        echo json_encode($data);
        echo '<hr>';
    }//end function seed_usuario_curso

    public function seed_categoria(){
        $data = array(
            array('categoria'=>'1er parcial', 'id_curso'=>1),
            array('categoria'=>'2do parcial', 'id_curso'=>1),
            array('categoria'=>'Nuevos archivos', 'id_curso'=>2),
            array('categoria'=>'9°A', 'id_curso'=>2),
            array('categoria'=>'Cosas', 'id_curso'=>2),
            array('categoria'=>'DB de tarea', 'id_curso'=>3),
            array('categoria'=>'Examen', 'id_curso'=>3)
        );
        $this->db->insert_batch('categoria', $data);
        echo 'Tabla categoria ... Registros creados: '.sizeof($data).'<br>';
        echo json_encode($data);
        echo '<hr>';
    }//end function seed_categoria

    public function seed_documentos(){
        $data = array(
            array('nombre'=>'Planeación','url'=>'/documentos/doc.docx','tipo'=>'docx'),
            array('nombre'=>'Presentación','url'=>'/documentos/excel.xlsx','tipo'=>'xlsx'),
            array('nombre'=>'Examen','url'=>'/documentos/siid.pdf','tipo'=>'pdf'),
            array('nombre'=>'Practica','url'=>'/documentos/siid.pdf','tipo'=>'pdf'),
            array('nombre'=>'Caso de uso','url'=>'/documentos/excel.xlsx','tipo'=>'xlsx'),
            array('nombre'=>'Análisis de riegos','url'=>'/documentos/doc.docx','tipo'=>'docx'),
            array('nombre'=>'Examen final','url'=>'/documentos/doc.docx','tipo'=>'docx'),
            array('nombre'=>'Respuestas del examen','url'=>'/documentos/excel.xlsx','tipo'=>'xlsx'),
            array('nombre'=>'Final_final','url'=>'/documentos/siid.pdf','tipo'=>'pdf'),
            array('nombre'=>'Ya_casi','url'=>'/documentos/excel.xlsx','tipo'=>'xlsx'),
        );
        $this->db->insert_batch('documentos', $data);
        echo 'Tabla documentos... Registros creados: '.sizeof($data).'<br>';
        echo json_encode($data);
        echo '<hr>';
    }//end function seed_categoria

    public function seed_subcategoria_documentos(){
        $data = array(
            array('id_categoria'=>1,'id_documento'=>1),
            array('id_categoria'=>1,'id_documento'=>2),
            array('id_categoria'=>1,'id_documento'=>3),
            array('id_categoria'=>2,'id_documento'=>4),
            array('id_categoria'=>2,'id_documento'=>5),
            array('id_categoria'=>2,'id_documento'=>6),
            array('id_categoria'=>2,'id_documento'=>7),
            array('id_categoria'=>3,'id_documento'=>8),
            array('id_categoria'=>3,'id_documento'=>9),
            array('id_categoria'=>3,'id_documento'=>10),
        );
        $this->db->insert_batch('categoria_documentos', $data);
        echo 'Tabla usuario_curso ... Registros creados: '.sizeof($data).'<br>';
        echo json_encode($data);
        echo '<hr>';
    }//end function seed_usuario_curso

    public function seed_especialidad(){
        $data = array(
            array('especialidad'=>'Aplicación de las TI'),
            array('especialidad'=>'Base de Datos'),
            array('especialidad'=>'Ciencias Básicas'),
            array('especialidad'=>'Desarrollo Humano'),
            array('especialidad'=>'Emprendimiento y Empleabilidad'),
            array('especialidad'=>'Fundamentos de TI'),
            array('especialidad'=>'Inglés'),
            array('especialidad'=>'Ingeniería de Software'),
            array('especialidad'=>'Inteligencia de Negocios'),
            array('especialidad'=>'Programación Estructurada'),
            array('especialidad'=>'Programación Orientada a Objetos'),
            array('especialidad'=>'Programación Web'),
            array('especialidad'=>'Procesos Administrativos en TI'),
            array('especialidad'=>'Redes'),
            array('especialidad'=>'Seguridad Informática')
        );
        $this->db->insert_batch('especialidad', $data);
        echo 'Tabla especialidad... Registros creados: '.sizeof($data).'<br>';
        echo json_encode($data);
        echo '<hr>';
    }//end function seed_categoria


}//end class Operacionesdb

?>
