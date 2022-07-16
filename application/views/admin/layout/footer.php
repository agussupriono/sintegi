        </div>
      </div>
  </div>
  <!--  end  Context Classes  -->
</div>
</div>
<!-- /. ROW  -->
</div>

</div>
<!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
<!-- /. WRAPPER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="<?php echo base_url() ?>assets/admin/assets/js/jquery-3.5.1.min.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="<?php echo base_url() ?>assets/admin/assets/js/bootstrap.min.js"></script>
<!-- METISMENU SCRIPTS -->
<script src="<?php echo base_url() ?>assets/admin/assets/js/jquery.metisMenu.js"></script>
<!-- DATA TABLE SCRIPTS -->
<script src="<?php echo base_url() ?>assets/admin/assets/js/dataTables/jquery.dataTables.js"></script>
<script src="<?php echo base_url() ?>assets/admin/assets/js/dataTables/dataTables.bootstrap.js"></script>
<script>
$(document).ready(function () {
    var element = document.getElementById("optimus-set-paging");
    if(element===null){
        var parData = {'paging' : true};
        $('#dataTables-example').dataTable(parData);
    } else {
        var parData = {'paging' : element.value};
    }
    
});
</script>
<!-- CUSTOM SCRIPTS -->
<script src="<?php echo base_url() ?>assets/admin/assets/js/custom.js"></script>
<!-- COLOR PICKER-->
<script src="<?php echo base_url() ?>assets/admin/assets/js/color.js"></script>
<link href="<?php echo base_url() ?>assets/admin/assets/css/color.min.css" rel="stylesheet" />
</body>
</html>