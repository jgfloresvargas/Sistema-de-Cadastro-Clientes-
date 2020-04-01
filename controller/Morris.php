<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Morris extends Controller{ 
    
    public function __construct() {
        parent::__construct();    
    }

    public function index(){
        $this->view->load('header');
        $this->view->load('nav');
        $this->view->load('morris');
        $this->view->load('footer');
        
    }
    
    
    
    
    //put your code here
} 


?>