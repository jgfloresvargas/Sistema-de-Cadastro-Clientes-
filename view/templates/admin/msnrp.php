

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Mensagem</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-7">            
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Clientes</h3>
                </div>


               

                <?php if ($data['nv'] == true) { ?> 
                
                
                <div class="panel-body ">
                    <div class="row">
                        <div class="col-lg-12 center">
                            
                            <?php 
                            
                            $class = '<i class="fa fa-gift fa-fw"></i>';
                            
                            echo "$class Clicar no ícone de notificações para mandar mensagem!!"
                            
                            ?>
                            
                             <?php } else { 
                                        //html para php
                                        $class = '<i class="fa fa-gift fa-fw"></i>';
                                        
                                        echo "$class Não à Aniversáriantes para mandar mensagem!!";
                                    } ?>  

                           

                            <?php if (isset($data['msg'])): ?>
                                <div class="alert alert-danger alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <?php echo $data['msg'] ?>
                                </div>
                            <?php endif ?>
                        </div>                        
                    </div>                        
                </div> 
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <a href="javascript:history.back(-1);">
                                     
                    </a>
                    <br><br><br>
                </div> 


            </div>
        </div>
    </div>
    <!-- /.row -->


</div>  



