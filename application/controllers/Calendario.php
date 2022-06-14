<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendario extends MY_Controller {
        
    public function __construct() {
        parent::__construct();
    }

    public function index(){
        $data['tabTitle'] = "Plantilla Base - calendario";
        $data['pagecontent'] = "calendario/calendario";
        $data['calendarios'] = $this->Query_Model->DatosHorario();
        
        $this->loadpageintotemplate($data);
   	}
}
