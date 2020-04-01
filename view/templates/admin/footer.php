
<!-- jQuery -->
<script src="<?php echo $this->asset ?>/vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo $this->asset ?>/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo $this->asset ?>/vendor/metisMenu/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="<?php echo $this->asset ?>/vendor/raphael/raphael.min.js"></script>
<script src="<?php echo $this->asset ?>/vendor/morrisjs/morris.min.js"></script>
<script src="<?php echo $this->asset ?>/data/morris-data.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php echo $this->asset ?>/dist/js/sb-admin-2.js"></script>

<!-- DataTables JavaScript -->
<script src="<?php echo $this->asset ?>/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?php echo $this->asset ?>/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="<?php echo $this->asset ?>/vendor/datatables-responsive/dataTables.responsive.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php echo $this->asset ?>/dist/js/sb-admin-2.js"></script>
<script src="<?php echo $this->asset ?>/datepicker/js/jquery-ui.min.js"></script> 

<script src="<?php echo $this->asset ?>/datepicker/js/jquery-1.12.4.js"></script>
<script src="<?php echo $this->asset ?>/datepicker/js/jquery-ui.js"></script> 

<!-- msn -->

<!--<script src="<?php echo $this->asset?>/ckeditor/ckeditor.js"></script> -->

<script src="<?php echo $this->asset?>/plugins/tinymce/tinymce.min.js"></script>   
<script>tinymce.init({selector: 'textarea'});</script>

<script src="<?php echo $this->asset?>/plugins/tinymce/jquery.tinymce.min.js"></script>



<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>


<script type="text/JavaScript">
    function confirmLink(link3){
        var agree = confirm("Deseja deletar os dados?");
        
            var link1 = <?php echo $this->base_url;?>;
            var link2 = "Cadastrar/removeCadastrar/";
            
            var link = link1 + link2 + link3;
            
        if (agree){
            window.location = link;
            return true;
        } else {
            return false ;
        }
    }
</script>  


<script type="text/javascript">
function somarValores(){
var s1 = <?php echo $this->base_url; ?>;
var s2 = "Cadastrar/updateCadastrar/";
var s3 = s1+s2; 

}
 
</script>






</body>

</html>