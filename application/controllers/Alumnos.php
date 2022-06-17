<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumnos extends MY_Controller {
        
    public function __construct() {
        parent::__construct();
    }

    public function index(){
        $data['tabTitle'] = "Registro de Alumnos";
        $data['pagecontent'] = "alumnos/alumnos";
        $data['ninos'] = $this->Query_Model->DataNinos();
        $data['padres'] = $this->Query_Model->DataPadres();
        
        $this->loadpageintotemplate($data);       
    }

    /* Guardar Alumno */
    public function SaveAlumno(){        
        $nombre = $this->input->post("nombre");
        $apaterno = $this->input->post("apaterno");
        $amaterno = $this->input->post("amaterno");
        $tel_emergencia = $this->input->post("tel_emergencia");
        $nivel = $this->input->post("nivel");

        $datos_alumno_tb_ninos = array(
            'nombre_nino' => $nombre,
            'apaterno_nino' => $apaterno,
            'amaterno_nino' => $amaterno,
            'tel_emergencia' => $tel_emergencia,
            'nivel' => $nivel,
            'role_nino' => 'Nino',
            'estado_nino' => '1'
        );
    
        $this->Query_Model->InsertAlumnoInTbNinos($datos_alumno_tb_ninos);
        /* $this->Query_Model->InsertIdAlumnoIntoTbPadres(); */
    }

    /* Actualizar Alumno */
    public function UpdateAlumno(){
 
        $id = $this->input->post('id');
        $nombre = $this->input->post("nombre");
        $apaterno = $this->input->post("apaterno");
        $amaterno = $this->input->post("amaterno");
        $tel_emergencia = $this->input->post("tel_emergencia");
        $nivel = $this->input->post("nivel");
        $estado = $this->input->post("estado");
        $padre = $this->input->post("padre");

        $datos_alumno_tb_ninos = array(
            'nombre_nino' => $nombre,
            'apaterno_nino' => $apaterno,
            'amaterno_nino' => $amaterno,
            'tel_emergencia' => $tel_emergencia,
            'nivel' => $nivel,
            'estado_nino' => $estado,
            'id_padre' => $padre
        );
    
        $this->Query_Model->UpdateAlumnoInTbNinos($id,$datos_alumno_tb_ninos);
    
    }

    /* Borrar Alumno */
    public function DeleteAlumno(){
        $id = $this->input->post('id');
        $this->Query_Model->DeleteAlumnoTbNinos($id);
        redirect('/Padres');
    }

    /* Obtener el alumno mediante el ID asignado */
    public function AlumnoPorId(){
        $id = $this->input->post('id');
        $res = $this->Query_Model->GetAlumnoById($id);
        echo json_encode($res);
    }

}
