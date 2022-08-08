<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nivel2 extends MY_Controller {
        
    public function __construct() {
        parent::__construct();
    }

    public function index(){
        $data['tabTitle'] = "Plantilla Base - nivel2";
        $data['pagecontent'] = "niveles/nivel2";
        $data['ninos'] = $this->Query_Model->DataNivel2();
        
        $this->loadpageintotemplate($data);
   	}


}
