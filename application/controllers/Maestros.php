<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maestros extends MY_Controller {
        
    public function __construct() {
        parent::__construct();
    }

    public function index(){
        $data['tabTitle'] = "Registro de Maestros";
        $data['pagecontent'] = "maestros/maestros";
        $data['maestros'] = $this->Query_Model->DataMaestros();
        
        $this->loadpageintotemplate($data);       
    }

    /* Guardar Maestro */
    public function SaveMaestro(){        
        $nombre    = $this->input->post("nombre");
        $apaterno  = $this->input->post("apaterno");
        $amaterno  = $this->input->post("amaterno");
        $telefono  = $this->input->post("telefono");
        $direccion = $this->input->post("direccion");
        $email     = $this->input->post("email");
        $username  = $this->input->post("username");
        $password  = $this->input->post("password");
        $nivel     = $this->input->post("nivel");
    
        $datos_maestro_tb_maestros = array(
            'nombre'    => $nombre,
            'apaterno'  => $apaterno,
            'amaterno'  => $amaterno,
            'telefono'  => $telefono,
            'nivel'     => $nivel,
            'direccion' => $direccion
        );

        $datos_maestro_tb_usuarios = array(
            'nombre' => $nombre,
            'apaterno' => $apaterno,
            'amaterno' => $amaterno,
            'email' => $email,
            'username' => $username,
            'password' => $password,
            'role' => 'Maestro',
            'estado' => '1'
        );
    
        $this->Query_Model->InsertMaestroInTbMaestros($datos_maestro_tb_maestros);
        $this->Query_Model->InsertMaestroInTbUsuarios($datos_maestro_tb_usuarios);
        $this->Query_Model->InsertIdMaestroIntoTbUsuarios();        
    }

    /* Actualizar Maestro */
    public function UpdateMaestro(){
 
        $id = $this->input->post('id');
        $nombre = $this->input->post("nombre");
        $apaterno = $this->input->post("apaterno");
        $amaterno = $this->input->post("amaterno");
        $telefono = $this->input->post("telefono");
        $direccion = $this->input->post("direccion");
        $email = $this->input->post("email");
        $username = $this->input->post("username");
        $password = $this->input->post("password");
        $estado = $this->input->post("estado");
    
        $datos_maestro_tb_maestros = array(
            'nombre' => $nombre,
            'apaterno' => $apaterno,
            'amaterno' => $amaterno,
            'telefono' => $telefono,
            'direccion' => $direccion
        );

        $datos_maestro_tb_usuarios = array(
            'nombre' => $nombre,
            'apaterno' => $apaterno,
            'amaterno' => $amaterno,
            'email' => $email,
            'username' => $username,
            'password' => $password,
            'estado' => $estado
        );
    
        $this->Query_Model->UpdateMaestroInTbMaestros($id,$datos_maestro_tb_maestros);
        $this->Query_Model->UpdateMaestroInTbUsuarios($id,$datos_maestro_tb_usuarios);
    
    }

    /* Borrar Maestro */
    public function DeleteMaestro(){
        $id = $this->input->post('id');
        $this->Query_Model->DeleteMaestroTbMaestros($id);
        $this->Query_Model->DeleteMaestroTbUsuarios($id);
        redirect('/Maestros');
    }

    /* Obtener el maestro mediante el ID asignado */
    public function MaestroPorId(){
        $id = $this->input->post('id');
        $res = $this->Query_Model->GetMaestroById($id);
        echo json_encode($res);
    }

}
