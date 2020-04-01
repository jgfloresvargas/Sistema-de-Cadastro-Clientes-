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
class AdminModel extends Model {
    //put your code here
    
    public function getUsuarioByLogin($login) {
        
        
        $sql = "SELECT * FROM administrador WHERE login = :login";
        $resultado = $this->ExecuteQuery($sql, [':login' => $login]);
        
        
        if($resultado){
          $admin = $resultado[0];
          return new AdminUser($admin['login'],$admin['senha'],$admin['id_admin']);
        }else{
          return $resultado;
        }
    }   
    
}
