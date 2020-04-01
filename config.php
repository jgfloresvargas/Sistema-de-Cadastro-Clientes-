<?php
//Simple MVC Configuration File
//Inicialização da variável $config
unset($config);
$config = new stdClass();
$config->defaultClass = "Admin";
$config->base_url = '/gildamodas/';
$config->url = 'http://localhost'.$config->base_url;
$config->asset = $config->base_url.'view/templates/';
$config->template = 'default';

//FTP: senha nome
//Database
$config->dbuser = 'root'; //nomedoaluno
$config->dbpassword = '261138'; //senha
$config->dbname ='mvc';//nomedoaluno












