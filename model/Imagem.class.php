<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Imagem
 *
 * @author Professor
 */
class Imagem {
    //put your code here
   private $id_imagem;
   private $src;
   private $title;
   private $alt;
   private $descricao;
   
   
   public function __construct($id,$src,$title,$alt,$descricao) {
    
       $this->id_imagem = $id;
       $this->src = $src;
       $this->title = $title;
       $this->alt = $alt;
       $this->descricao = $descricao;
       
    }
    
    function getId_imagem() {
        return $this->id_imagem;
    }

    function getSrc() {
        return $this->src;
    }

    function getTitle() {
        return $this->title;
    }

    function getAlt() {
        return $this->alt;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function setId_imagem($id_imagem) {
        $this->id_imagem = $id_imagem;
    }

    function setSrc($src) {
        $this->src = $src;
    }

    function setTitle($title) {
        $this->title = $title;
    }

    function setAlt($alt) {
        $this->alt = $alt;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }
    
    //Getters Setters PHP 
    public function __set($name,$value){
        $this->$name = $value;
    }
    
    public function __get($name){
        return $this->$name;
    } 
            
}