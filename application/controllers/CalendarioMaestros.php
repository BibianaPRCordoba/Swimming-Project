<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CalendarioMaestros extends MY_Controller {
        
    public function __construct() {
        parent::__construct();
    }

    public function index(){
    	$user = $this->session->userdata('user');
        $data['tabTitle'] = "Plantilla Base - CalendarioMaestros";
        $data['pagecontent'] = "CalendarioMaestros/CalendarioMaestros";
        $data['calendariosmaestros'] = $this->Query_Model->GetMaestroByUser($user);
    
        $this->loadpageintotemplate($data);
   	}
    
    

   	

        
  
}
