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
class Flot extends Admin{ 
    
    public function __construct() {
        parent::__construct();    
    }

    public function index(){
        $this->view->load('header');
        $this->view->load('nav');
        $this->view->load('flot');
        $this->view->load('footerFlot');
        
    }
    
    
    
    
    //put your code here
} 


?>
