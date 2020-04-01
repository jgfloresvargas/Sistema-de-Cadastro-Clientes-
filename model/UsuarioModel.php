<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsuarioModel
 *
 * @author echoes
 */
class UsuarioModel extends Model {
    //put your code here
    
    public function getUsuarioByLogin($login) {
        $sql = "SELECT * FROM usuario WHERE login = :login";
        $resultado = $this->ExecuteQuery($sql, [':login' => $login]);
        if($resultado){
          $user = $resultado[0];
          return new Usuario($user['login'],$user['senha'],$user['nome'],$user['email'],$user['id_user']);
        }else{
          return $resultado;
        }
    }   
    
}
