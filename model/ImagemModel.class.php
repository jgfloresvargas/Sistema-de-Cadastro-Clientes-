<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ImagemModel
 *
 * @author Professor
 */
class ImagemModel extends Model{
    //put your code here
    
     public function getImagens() {
        $imagens = [];
        $sql = "SELECT * FROM imagens";
        $resultados = $this->ExecuteQuery($sql, array());              
        foreach ($resultados as $linha){
            $imagens[] = new Imagem(
                    $linha['id_imagem'],
                    $linha['src'],
                    $linha['title'],
                    $linha['alt'],
                    $linha['descricao']
                    );            
        }
        return $imagens;
    }
    
}
