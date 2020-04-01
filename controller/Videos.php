<?php
class Videos extends Controller{
    //put your code here
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        $this->view->load('header');
        $this->view->load('nav');
        $this->view->load('videos');
    }
    
}











