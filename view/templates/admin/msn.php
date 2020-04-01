
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


                

                
                <div class="panel-body ">
                    <div class="row">
                        <div class="col-lg-12 center">
                            <form role="form" method="post">
                                <div class="form-group">
                                    <label>Nome:</label>
                                    <input class="form-control" type='text' name='nome' maxlength="50" required autofocus placeholder="Nome Do Cliente" value="<?php  echo  ($data['datausuario'])? $data['datausuario']->getnome():""; ?>">
                                </div>   

                                <div class="form-group">
                                    <label>E-mail:</label>
                                    <input class="form-control" type='text' name='email' maxlength="50" required  placeholder="E-mail" value="<?php  echo  ($data['datausuario'])? $data['datausuario']->getemail():""; ?>">
                                </div> 

                                
                                <div class="form-group">
                                    <label>Assunto:</label>
                                    <input class="form-control" type='text' name='assunto' maxlength="50" required  placeholder="assunto">
                                </div>  
                                
                                
                              
                                <div class="form-group">
                                    <label>Mensagem:</label>
                                    <textarea class="form-control" name="editor" rows="5" id="wysiwig_simple"></textarea>
                                    
                                </div> 
                                
                                <input class="btn btn-default" type="reset" class="campo_submit" value="Limpar" />
                                <input class="btn btn-default" type="submit" class="campo_submit" value="Enviar"  name="send" />

                          
                            </form>   
                            
                            

                           

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

<script type="text/javascript">
$(document).ready(function() {
	// Create Wysiwig editor for textare
	TinyMCEStart('#wysiwig_simple', null);
	TinyMCEStart('#wysiwig_full', 'extreme');
	// Add slider for change test input length
	FormLayoutExampleInputLength($( ".slider-style" ));
	// Initialize datepicker
	$('#input_date').datepicker({setDate: new Date()});
	// Load Timepicker plugin
	LoadTimePickerScript(DemoTimePicker);
	// Add tooltip to form-controls
	$('.form-control').tooltip();
	LoadSelect2Script(DemoSelect2);
	// Load example of form validation
	LoadBootstrapValidatorScript(DemoFormValidator);
	// Add drag-n-drop feature to boxes
	WinMove();
});

</script>

