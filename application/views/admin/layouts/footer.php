
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->
        <div class="container">
      
      <div class="copyright">
       
      <div style="margin-top: 50px; margin-left:40%;" >
        &copy; Copyright <strong></strong><a href="https://github.com/HR77scu" target="_blank">Alief Arrafi </a>| <a href="https://github.com/roufq" target="_blank">Ahmad Rouf</a> | <a href="https://creativedev.id" target="_blank">creative</a>
      </div>
      </div>
    </div>
  </footer>

        <!-- jQuery 2.0.2 -->
        <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript"></script>
        <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <script src=" https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" type="text/javascript"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js" type="text/javascript"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js " type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/js/AdminLTE/app.js" type="text/javascript"></script> 
        <script type="text/javascript">
            function pil(){
        if($("#pill").val()=="Pilihan Ganda"){
            $("#pilg").show();
        }else{
            $("#pilg").hide();
        }
    }


        </script>  
        <script type="text/javascript">
            
        </script>  
        <script type="text/javascript">
            $(function() {
                $("#example1").dataTable({
                    // "bPaginate": true,
                    // "bLengthChange": true,
                    "bFilter": true,
                    // "bSort": false,
                    "bInfo": false,
                    // "bAutoWidth": false
                    dom: 'Bfrtip',
                    buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                    ]
                });
                $('#example2').dataTable({
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": false
                });
                var css = {float: 'right'};
                $('#example1_filter').css(css);
            });
        </script>
    </body>
</html>