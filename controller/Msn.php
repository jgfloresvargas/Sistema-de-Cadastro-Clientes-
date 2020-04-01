<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Flot
 *
 * @author guilherme
 */ 


class Msn extends Admin{ 
    
    public function __construct() {
        parent::__construct();    
    
       
        
    } 
    
    

    public function index(){
        
        
        
        $data['nv'] = $this->model->getNiver(); 
        $data['all'] = $this->model->getCadastrar();
        $this->view->load('header');
        $this->view->load('nav',$data);
        $this->view->load('msnrp',$data);
        $this->view->load('footer');
        
    }  
    
    
    public function send($id_cadastrar){
        
        $data['msg'] = ''; 
          
        if (filter_input(INPUT_POST, 'send')) {
            $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            $assunto = filter_input(INPUT_POST, 'assunto', FILTER_SANITIZE_STRING); 
            $editor = filter_input(INPUT_POST, 'editor', FILTER_SANITIZE_STRING);
           

         if ($nome && $email && $assunto && $editor) {
               
             include_once 'helpers/phpmailer/PHPMailer/class.smtp.php';
             include_once 'helpers/phpmailer/PHPMailer/class.phpmailer.php';

                //Enviando o e-mail utilizando a classe PHPMail
                $Mailer = new PHPMailer;
                $Mailer->CharSet = "utf8";
                //$Mailer->SMTPDebug = 3;
                $Mailer->IsSMTP();
                $Mailer->Host = "smtp.live.com";
                $Mailer->SMTPAuth = true;
                $Mailer->Username = "gui_floresvargas@hotmail.com";
                $Mailer->Password = "gui100%";
                $Mailer->SMTPSecure = "tls";
                $Mailer->Port = 587;
                $Mailer->FromName = "{$nome}";
                $Mailer->From = "gui_floresvargas@hotmail.com";
                $Mailer->AddAddress("$email");
                $Mailer->IsHTML(true);
                $Mailer->Subject = "$assunto";
                $Mailer->Body = ("$editor") . "<br><br> E-mail enviado por Gilda";

                if ($Mailer->Send()) {                  
                   // $this->index(); 
                     $data['msg'] = 'Enviando com sucesso!';
                    
                } else {
                    $data['msg'] = 'Erro ao registrar!';
                }
            } else {
                $data['msg'] = 'Complete os campos obrigatórios!';
            }
        } 
        
        
        $data['nv'] = $this->model->getNiver();
        $data['datausuario'] = $this->model->getCadastrarById($id_cadastrar);
        $this->view->load('header');
        $this->view->load('nav',$data);
        $this->view->load('msn',$data);
        $this->view->load('footer');
        
    } 
}
    
 
    
    
?>



