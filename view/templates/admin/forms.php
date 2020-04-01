

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Cliente</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-7">            
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Cadastrar Cliente</h3>
                </div>

                <div class="panel-body ">
                    <div class="row">
                        <div class="col-lg-12 center">
                            <form role="form" method="post">
                                <div class="form-group">
                                    <label>Nome:</label>
                                    <input class="form-control" type='text' name='nome' maxlength="50" required autofocus placeholder="Nome Do Cliente">
                                </div>   

                                <div class="form-group">
                                    <label>E-mail:</label>
                                    <input class="form-control" type='text' name='email' maxlength="50" required autofocus placeholder="E-mail">
                                </div> 

                                <div class="form-group">
                                    <label>Fone:</label>
                                    <input class="form-control" type='text' name='fone' maxlength="50" required autofocus placeholder="Fone">
                                </div> 

                                <?php 
                                $meses = array( '1' => 'Janeiro',
                                                '2' => 'Fevereiro',
                                                '3' => 'Março',
                                                '4' => 'Abril',
                                                '5' => 'Maio',
                                                '6' => 'Junho',
                                                '7' => 'Julho',
                                                '8' => 'Agosto',
                                                '9' => 'Setembro',
                                                '10' => 'Outubro',
                                                '11' => 'Novembro',
                                                '12' => 'Dezembro');
                                ?>
                               
                                <div class="form-group">
                                    <table border="0">  

                                        <tr> 
                                        <br><td><label>Data de Nascimento: </label></td>

                                        <td>  

                                            <select class="form-control" name="dia"> 
                                                <option value="">Dia</option>
                                                <?php for ($i = 1; $i < 32; $i++) { ?> 
                                                    <option value="<?php echo $i; ?>"> <?php echo $i; ?> </option> 
                                                <?php } ?>  
                                            </select> 
                                        </td> 


                                        <td>  
                                            <select class="form-control" name="mes">  
                                                <option value="">Mês</option>  
                                                <?php 
                                                    for($i = 1; $i <= count($meses); $i++){
                                                        echo "<option value=$i>  $meses[$i] </option>";
                                                    }  
                                                ?>
                                            </select> 
                                        </td>  
                                        
                                         <td>  

                                            <select class="form-control" name="ano"> 
                                                <option value="">Ano</option>
                                                <?php for ($i = 1950; $i < 2021; $i++) { ?> 
                                                    <option value="<?php echo $i; ?>"> <?php echo $i; ?> </option> 
                                                <?php } ?>  
                                            </select> 
                                        </td> 
                                        
                                    
                                    </tr> 

                                     
                                    </table>
                                </div> 

                                <input type="submit" class="btn btn-default" value='Cadastrar Cliente' name="add" > 
                                <input type="reset" class="btn btn-default" value="Reiniciar Formulário">
                            </form>                              

                           

                            <?php if ($data['msg']): ?>
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
                        <button type="button" class="btn btn-primary btn-lg"><i class="fa fa-arrow-left"></i> Voltar</button>                
                    </a>
                    <br><br><br>
                </div> 


            </div>
        </div>
    </div>
    <!-- /.row -->


</div>  


