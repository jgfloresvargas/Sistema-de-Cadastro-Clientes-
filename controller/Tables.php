<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Flot
 *
 * @author guilherme
 */
class Tables extends Admin{ 
    
    public function __construct() {
        parent::__construct();    
    }

    public function index(){ 
        $data['nv'] = $this->model->getNiver();
        $this->view->load('header');
        $this->view->load('nav',$data);
        $this->view->load('tables');
        $this->view->load('footer');
        
    }
    
    
    
    
    //put your code here
} 


?>
