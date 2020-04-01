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
class Inc extends Admin{ 
    
    public function __construct() {
        parent::__construct();    
    }

    public function index(){ 
        
        $data['nv'] = $this->model->getNiver();
        $data['usuario'] = $this->login->getSession();
        $data['all'] = $this->model->getCadastrar(); // getCadastrar chamando o arquivo cadastrarModel 
        $this->view->load('header');
        $this->view->load('nav', $data);
        $this->view->load('inc', $data);
        $this->view->load('footer'); 
        
    }
    
    
    
    
    //put your code here
} 


?>


