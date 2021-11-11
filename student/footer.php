
<!-- Jquery Core Js -->
    <script src="<?php echo $set['installUrl']; ?>modules/plugins/jquery/jquery.min.js"></script>
	<script src="<?php echo $set['installUrl']; ?>modules/js/jquery-1.12.4.min.js" ></script>
    <!-- Bootstrap Core Js -->
    <script src="<?php echo $set['installUrl']; ?>modules/plugins/bootstrap/js/bootstrap.js"></script>
	<!-- datatables js 
	<script type="text/javascript" src="<?php echo $set['installUrl']; ?>modules/datatables/datatables.min.js"></script>-->
	<!-- include custom index.js -->
	<script type="text/javascript" src="js/dept.js"></script>
	
    <script src="<?php echo $set['installUrl']; ?>modules/assets/js/bootstrap-imageupload.js"></script>

        <script>
            var $imageupload = $('.imageupload');
            $imageupload.imageupload();

            $('#imageupload-disable').on('click', function() {
                $imageupload.imageupload('disable');
                $(this).blur();
            })

            $('#imageupload-enable').on('click', function() {
                $imageupload.imageupload('enable');
                $(this).blur();
            })

            $('#imageupload-reset').on('click', function() {
                $imageupload.imageupload('reset');
                $(this).blur();
            });
        </script>
	
	

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo $set['installUrl']; ?>modules/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo $set['installUrl']; ?>modules/plugins/node-waves/waves.js"></script>
    <!--<script src="<?php echo $set['installUrl']; ?>modules/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>-->
	
	<!-- Jquery DataTable Plugin Js -->
    <script src="<?php echo $set['installUrl']; ?>modules/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="<?php echo $set['installUrl']; ?>modules/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="<?php echo $set['installUrl']; ?>modules/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="<?php echo $set['installUrl']; ?>modules/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="<?php echo $set['installUrl']; ?>modules/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="<?php echo $set['installUrl']; ?>modules/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="<?php echo $set['installUrl']; ?>modules/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="<?php echo $set['installUrl']; ?>modules/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="<?php echo $set['installUrl']; ?>modules/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
    
	<script src="js/student.js"></script>  
	<script src="js/course.js"></script>  
	<script src="js/grade.js"></script>  
    
    
     <!-- Custom Js -->
    <script src="<?php echo $set['installUrl']; ?>modules/js/admin.js"></script>
   <script src="<?php echo $set['installUrl']; ?>modules/js/pages/ui/modals.js"></script>
   
   <script>

var accountTable;

$(document).ready(function() {
    var printCounter = 0;
    // Append a caption to the table before the DataTables initialisation
   	accountTable = $("#accountTable").DataTable({
		"scrollY": 300,
        "scrollX": true,
		"pageLength": 150,
		"order": [],
       /* dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm",
                  title: function(){
                     var printTitle = 'Employers Jobs Information';
                   return printTitle
                   }
                },
                {
                  extend: "csv",
                  className: "btn-sm",
                  title: function(){
                     var printTitle = 'Employers Jobs Information';
                   return printTitle
                   }
                },
				
                {
                  extend: "excel",
                  className: "btn-sm",
                 title: function(){
                     var printTitle = 'Employers Jobs Information';
                   return printTitle
                   }
                },
                {
                  extend: "pdf",
                  className: "btn-sm",
                  title: function(){
                     var printTitle = 'Employers Jobs Information';
                   return printTitle
                   }
                },
                {
                  extend: "print",
                  className: "btn-sm",
                  title: function(){
                     var printTitle = 'Employers Jobs Information';
                   return printTitle
                   }
                },
              ],*/
              responsive: true
	});
	

	
});
   </script>
  
 
        
</body>

</html>