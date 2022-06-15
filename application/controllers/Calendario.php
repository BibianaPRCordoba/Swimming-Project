<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendario extends MY_Controller {
        
    public function __construct() {
        parent::__construct();
    }

    public function index(){
    	$user = $this->session->userdata('user');
        $data['tabTitle'] = "Plantilla Base - calendario";
        $data['pagecontent'] = "calendario/calendario";
       	$data['calendarios'] = $this->Query_Model->GetPadreByUser($user);
       	// $data['session']= array(
	       //                  "id"=>$usuario_existe_email->email
	       //              );
        $this->loadpageintotemplate($data);
   	}

   	

        
  
}
