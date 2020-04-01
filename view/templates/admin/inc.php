
        <?php $total = count($data['nv']); 
        $all = count($data['all']);
        
        ?> 

            <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Início</h1> 
                </div> 
                </div>
             
            
            
            <!-- /.row -->
            
            
            
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <a href="nav.php"></a>
                    
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3" id="ds">
                                    <i class="fa fa-users fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"> </div>
                                    <div></div>
                                </div>
                            </div> 
                            
                        </div>
                        <a href="<?php echo $this->base_url ?>Cadastrar/addCadastrar/">
                            <div class="panel-footer">
                                <span class="pull-left">Cadastrar clientes</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $all; ?></div>
                                    <div>Total de clientes</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo $this->base_url ?>Cadastrar/index/">
                            <div class="panel-footer">
                                <span class="pull-left">Listar Clientes</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-gift fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"> <?php echo $total ?> </div>
                                    <div>Total aniversariates</div>
                                </div>
                            </div>
                        </div>
                        
                            <div class="panel-footer">
                                <span class="pull-left">Aniversários</span>
                                <span class="pull-right"></span>
                                <div class="clearfix"></div>
                            </div>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-envelope-o fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                   
                                    
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo $this->base_url ?>Msn/index/">
                            <div class="panel-footer">
                                <span class="pull-left">Mensagem</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            
        <!-- /#page-wrapper -->
        <hr>
    
        </div> 
        <hr>
    <!-- /#wrapper -->

