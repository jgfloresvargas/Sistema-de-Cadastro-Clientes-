<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of News
 *
 * @author Professor
 */
class Noticia{
    //put your code here
    
    
    private $id_news;
    private $title;
    private $text;
    private $listImagens;
    
    function __construct( $title, $text, $listImagens=[],$id_news=null) {
        $this->id_news = $id_news;
        $this->title = $title;
        $this->text = $text;
        $this->listImagens = $listImagens;
    }

    function getId_news() {
        return $this->id_news;
    }

    function getTitle() {
        return $this->title;
    }

    function getText() {
        return $this->text;
    }

    function getListImagens() {
        return $this->listImagens;
    }

    function setId_news($id_news) {
        $this->id_news = $id_news;
    }

    function setTitle($title) {
        $this->title = $title;
    }

    function setText($text) {
        $this->text = $text;
    }

    function setListImagens($listImagens) {
        $this->listImagens = $listImagens;
    }


    
}
