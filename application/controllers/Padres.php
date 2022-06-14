<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Padres extends MY_Controller {
        
    public function __construct() {
        parent::__construct();
    }

    public function index(){
        $data['tabTitle'] = "Registro de Padres";
        $data['pagecontent'] = "padres/padres";
        $data['padres'] = $this->Query_Model->DataPadres();
        $data['ninos'] = $this->Query_Model->DataNinos();
        
        $this->loadpageintotemplate($data);       
   }

    function CheckUsuarioExistente(){
        $usuario = $this->input->post("username");
        $res = $this->Query_Model->GetPadreByUsername($usuario);
        echo json_encode($res);
    }

    public function SavePadre(){        
        $nombre = $this->input->post("nombre");
        $apaterno = $this->input->post("apaterno");
        $amaterno = $this->input->post("amaterno");
        $telefono = $this->input->post("telefono");
        $direccion = $this->input->post("direccion");
        $email = $this->input->post("email");
        $username = $this->input->post("username");
        $password = $this->input->post("password");
        $nino = $this->input->post("nino");
    
        $datos_padre_tb_padres = array(
            'nombre' => $nombre,
            'apaterno' => $apaterno,
            'amaterno' => $amaterno,
            'telefono' => $telefono,
            'direccion' => $direccion,
            'id_nino' => $nino
        );

        $datos_padre_tb_usuarios = array(
            'nombre' => $nombre,
            'apaterno' => $apaterno,
            'amaterno' => $amaterno,
            'email' => $email,
            'username' => $username,
            'password' => $password,
            'role' => 'Padre',
            'estado' => '1'
        );
    
        $this->Query_Model->InsertPadreInTbPadres($datos_padre_tb_padres);
        $this->Query_Model->InsertPadreInTbUsuarios($datos_padre_tb_usuarios);
        $this->Query_Model->InsertIdPadreIntoTbUsuarios();
    }

    public function UpdatePadre(){
 
        $id = $this->input->post('id');
        $nombre = $this->input->post("nombre");
        $apaterno = $this->input->post("apaterno");
        $amaterno = $this->input->post("amaterno");
        $telefono = $this->input->post("telefono");
        $direccion = $this->input->post("direccion");
        $email = $this->input->post("email");
        $username = $this->input->post("username");
        $password = $this->input->post("password");
        $nino = $this->input->post("nino");
        $estado = $this->input->post("estado");
    
        $datos_padre_tb_padres = array(
            'nombre' => $nombre,
            'apaterno' => $apaterno,
            'amaterno' => $amaterno,
            'telefono' => $telefono,
            'direccion' => $direccion,
            'id_nino' => $nino
        );

        $datos_padre_tb_usuarios = array(
            'nombre' => $nombre,
            'apaterno' => $apaterno,
            'amaterno' => $amaterno,
            'email' => $email,
            'username' => $username,
            'password' => $password,
            'estado' => $estado
        );

        $datos_padre_tb_ninos = array(
            'id_nino' => $nino
        );
    
        $this->Query_Model->UpdatePadreInTbPadres($id,$datos_padre_tb_padres);
        $this->Query_Model->UpdatePadreInTbUsuarios($id,$datos_padre_tb_usuarios);
        $this->Query_Model->UpdatePadreInTbNinos($id,$datos_padre_tb_ninos);
    
    }

    public function DeletePadre(){
        $id = $this->input->post('id');
        $this->Query_Model->DeletePadreTbPadres($id);
        $this->Query_Model->DeletePadreTbUsuarios($id);
        redirect('/Padres');
    }

    public function DeleteNinoFromPadre(){
        $id = $this->input->post('id');
        $this->Query_Model->DeletePadreTbPadres($id);
        $this->Query_Model->DeletePadreTbUsuarios($id);
        $this->Query_Model->DeleteNinoTbNinos($id);
        redirect('/Padres');
    }

    public function PadrePorId(){
        $id = $this->input->post('id');
        $res = $this->Query_Model->GetPadreById($id);
        echo json_encode($res);
    }

}
