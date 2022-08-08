<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nivel3 extends MY_Controller {
        
    public function __construct() {
        parent::__construct();
    }

    public function index(){
        $data['tabTitle'] = "Plantilla Base - nivel3";
        $data['pagecontent'] = "niveles/nivel3";
        $data['ninos'] = $this->Query_Model->DataNivel3();
        
        $this->loadpageintotemplate($data);
   	}


}
