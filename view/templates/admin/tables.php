<div id="page-wrapper">
    <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Clientes</h1>
                
                
                
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">            
                
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-lg-6 tabletitle">
                                Cadastros de Clientes
                            </div>
                            
                            
                        </div>
                        
                        
                    </div>

                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Fone</th>
                                <th>Data de Nascimento</th>
                                <th>Ações</th>                                
                            </tr>
                        </thead>
                        
                        <tbody> 
                            
                            <?php foreach ($data['cadastrar'] as $cadastrar): ?>
                                <tr class="<?php echo ($cadastrar->getid_cadastrar() % 2 == 0) ? 'even' : 'odd'; ?>">
                                    <td><?php echo $cadastrar->getid_cadastrar() ?></td>
                                    <td><?php echo $cadastrar->getnome() ?></td>
                                    <td><?php echo $cadastrar->getemail() ?></td>
                                    <td><?php echo $cadastrar->getfone() ?></td>
                                    <td><?php echo implode('/',array_reverse(explode('-', $cadastrar->getdatadenascimento()))); ?></td>
                                    
                                    <?php 
                                    
                                    $class = '<i class="fa fa-2x fa-edit"></i>';
                                        
                                       
                                    
                                    ?>
                                    
                                    
                                    <td> 
                                        
                                        
                                        <a href="<?php echo $this->base_url?>Cadastrar/updateCadastrar/<?php echo $cadastrar->getid_cadastrar() ?>"><i class='fa fa-2x fa-edit'></i></a>
                                        <a onclick="confirmLink(<?php echo $cadastrar->getid_cadastrar(); ?>)" href="#"> <i class='fa fa-2x fa-remove'> </i> </a>
                                    
                                    </td> 
                                    
                                </tr>
                            <?php endforeach; ?>
                                
                            </tbody>  
                        </form
                    </table> 


                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
</div>
</div>