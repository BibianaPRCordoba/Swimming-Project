<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nivel1 extends MY_Controller {
        
    public function __construct() {
        parent::__construct();
    }

    public function index(){
        $data['tabTitle'] = "Plantilla Base - nivel1";
        $data['pagecontent'] = "niveles/nivel1";
        $data['ninos'] = $this->Query_Model->DataNivel1();
        
        $this->loadpageintotemplate($data);
   	}


}
