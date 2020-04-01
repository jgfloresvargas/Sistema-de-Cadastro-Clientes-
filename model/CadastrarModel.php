<?php

date_default_timezone_set("America/Sao_Paulo");
setlocale(LC_ALL, 'pt_BR');

class CadastrarModel extends Model {
    
    public function upd($id_cadastrar){
        $list_cadastrar = [];
        $sql = "SELECT * FROM cadastrar where id_cadastrar = $id_cadastrar";
        
        $result = $this->ExecuteQuery($sql, array());
        
        return $result;
    } 
    
    //-----------------------------------------------------------------------------------------------------------
    
    public function getCadastrarById($id_cadastrar){
      
        $sql = "SELECT * FROM cadastrar where id_cadastrar = $id_cadastrar";
        
        $result = $this->ExecuteQuery($sql, array());
        
        return new Cadastro(
                    $result[0]['nome'], $result[0]['email'], $result[0]['fone'], $result[0]['datadenascimento'], $result[0]['id_cadastrar']);
    } 
    
    //-----------------------------------------------------------------------------------------------------------
    
    public function getCadastrar() {

        $list_cadastrar = [];
        $sql = "SELECT * FROM cadastrar";
        $results = $this->ExecuteQuery($sql, array());
        foreach ($results as $line) {
            $list_cadastrar[] = new Cadastro(
                    $line['nome'], $line['email'], $line['fone'], $line['datadenascimento'], $line['id_cadastrar']);
        }
        return $list_cadastrar;
    } 
    
    //----------------------------------------------------------------------------------------------------------- 
    
    public function msnrp() {

        $list_cadastrar = [];
        $sql = "SELECT * FROM cadastrar";
        $results = $this->ExecuteQuery($sql, array());
        foreach ($results as $line) {
            $list_cadastrar[] = new Cadastro(
                    $line['nome'], $line['email'], $line['fone'], $line['datadenascimento'], $line['id_cadastrar']);
        }
        return $list_cadastrar;
    } 
   
    
    
   //--------------------------------------------------------------------------------------------------------------- 
    public function getNiver() {

        $list_cadastrar = []; 
        $nv = date("m-d"); 
        $sql = "SELECT * FROM cadastrar WHERE datadenascimento like '%-$nv'";
        $results = $this->ExecuteQuery($sql, array());
        foreach ($results as $line) {
            $list_cadastrar[] = new Cadastro(
                    $line['nome'], $line['email'], $line['fone'], $line['datadenascimento'], $line['id_cadastrar']);
        }
        return $list_cadastrar;
    }

    
    
    
    // -------------------------------------------------------------------------------------------------------

    public function insertCadastrar($cadastrar) {
        $sql = "INSERT INTO cadastrar(nome, email, fone, datadenascimento) VALUES(:nome,:email, :fone, :datadenascimento)";
        if ($this->ExecuteCommand($sql, [':nome' => $cadastrar->getnome(), ':email' => $cadastrar->getemail(), ':fone' => $cadastrar->getfone(), ':datadenascimento' => $cadastrar->getdatadenascimento()])) {
            return true;
        } else {
            return false;
        }
    }

    public function removeCadastrar($id_cadastrar) {
        
        $sql = "DELETE FROM cadastrar WHERE id_cadastrar = :id_cadastrar";
        
        if ($this->ExecuteCommand($sql, [':id_cadastrar' => $id_cadastrar])) {
            return true;
        } else {
            return false;
        }
    } 
    
    //-----------------------------------------------------------------------------------------------------------

    public function updateCadastrar($id_cadastrar) {
        $sql = "UPDATE cadastrar SET nome = :nome, email = :email, fone = :fone, datadenascimento = :datadenascimento WHERE id_cadastrar = :id_cadastrar";
        $param = [':id_cadastrar' => $id_cadastrar->getid_cadastrar(), ':nome' => $id_cadastrar->getnome(), ':email' => $id_cadastrar->getemail(), ':fone' => $id_cadastrar->getfone(), ':datadenascimento' => $id_cadastrar->getdatadenascimento()];
        if ($this->ExecuteCommand($sql, $param)) {
            return true;
        } else {
            return false;
        }
    }

}
