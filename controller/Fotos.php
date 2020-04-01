<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Fotos
 *
 * @author Professor
 */
class Fotos extends Controller {
    //put your code here
    
    public function __construct() {
        parent::__construct();
        $this->model = new ImagemModel();
    }
    
    public function index() {
        $data['imagens'] = $this->model->getImagens();
        $this->view->load('header');
        $this->view->load('nav');
        $this->view->load('gallery',$data);
    }
    
    
    
}














