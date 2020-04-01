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
class AdminUser {
    //put your code here
    private $id_admin;
    private $login;
    private $senha;
    
    
    function __construct($login,$senha,$id_admin='') {
        $this->id_admin = $id_admin;
        $this->login = $login;
        $this->senha = $senha;
       
    }

    function getid_admin() {
        return $this->id_admin;
    }

    
    function getLogin() {
        return $this->login;
    }

    function getSenha() {
        return $this->senha;
    }

    
    function setid_admin($id_admin) {
        $this->id_admin = $id_admin;
    }

   
    function setlogin($login) {
        $this->login = $login;
    }

    function setsenha($senha) {
        $this->senha = $senha;
    }

   

}

