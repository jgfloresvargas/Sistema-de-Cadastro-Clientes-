
<div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-headenavbar-defaultr">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo $this->base_url?>Inc"><img class="top" src="<?php echo $this->asset?>img/gm.jpg"/></a>  
               
                
            </div>
            <!-- /.navbar-header --> 
            
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    
                   
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
		
                  <?php $total = count($data['nv']); ?> 
                   
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-gift fa-fw"></i><?php echo $total; ?> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts"  id="notf">
                        
                         
                        
                        <?php if ($data['nv'] == true) { ?>


                            <?php foreach ($data['nv'] as $cadastrar): ?>  
                        <li> 
                            
                            <a href="<?php echo $this->base_url ?>Msn/send/<?php echo $cadastrar->getid_cadastrar()?>">
                                <div> 
                                    
                                    
                                    <i class="fa fa-gift fa-fw"></i> Hoje é o aniversário de <?php echo $cadastrar->getnome() ?> na data 
                                        <?php echo implode('/',array_reverse(explode('-', $cadastrar->getdatadenascimento()))); ?>! 
                                        
                                        
                                        
                                    
                                
                              
                                </div>
                            </a> 
                            
                            <hr>  
                            
                        </li>  
                         
                            
                            <?php endforeach; ?>
                         
                                <?php } else { 
                                        //html para php
                                        $class = '<i class="fa fa-gift fa-fw"></i>';
                                        
                                        echo "$class Não à Aniversáriantes Hoje";
                                    } ?>  
                        
                            
                         
                        
                         
                        
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                     
                        <li><a href="<?php echo $this->base_url?>Admin/logout"><i class="fa fa-sign-out fa-fw"></i>Sair</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                       
                        <li>
                            <a href="<?php echo $this->base_url?>Inc">Início</a>
                        </li>
                        
                        <li>
                            <a href="<?php echo $this->base_url?>Cadastrar">Listar Clientes</a>
                        </li>
                        
                        <li>
                            <a href="<?php echo $this->base_url?>Cadastrar/addCadastrar">Cadastrar cliente</a>
                        </li>  
                        
                        <li>
                            <a href="<?php echo $this->base_url?>Msn">Mensagem</a>
                        </li>
                       
                        
                    </ul>
                </div> 
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->  
            
            
        
        </nav> 
        
</div>