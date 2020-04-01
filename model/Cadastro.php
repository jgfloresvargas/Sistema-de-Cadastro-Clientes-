<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author Professor
 */
class Cadastro {
    //put your code here
    private $id_cadastrar;
    private $nome;
    private $email;
    private $fone;
    private $datadenascimento;
    
    
    function __construct($nome,$email,$fone,$datadenascimento,$id_cadastrar='') {
        $this->id_cadastrar = $id_cadastrar;
        $this->nome = $nome;
        $this->email = $email;
        $this->fone = $fone;
        $this->datadenascimento = $datadenascimento;
       
    }

    function getid_cadastrar() {
        return $this->id_cadastrar;
    }

    
    function getnome() {
        return $this->nome;
    } 
    
    function getemail() {
        return $this->email;
    }

    function getfone() {
        return $this->fone;
    } 
    
    function getdatadenascimento() {
        return $this->datadenascimento;
    }


    
    function setid_cadastrar($id_cadastrar) {
        $this->id_cadastrar = $id_cadastrar;
    }

   
    function setnome($nome) {
        $this->nome = $nome;
    } 
    
    function setemail($email) {
        $this->email = $email;
    }

    
    function setdatadenascimento($datadenascimento) {
        $this->datadenascimento = $datadenascimento;
    }

   

}

