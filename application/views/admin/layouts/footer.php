</aside><!-- /.right-side -->
</div><!-- ./wrapper -->

<!-- add new calendar event modal -->
<div class="container">

    <div class="copyright">

        <div style="margin-top: 50px; margin-left:40%;">
            &copy; Copyright <strong></strong><a href="https://github.com/HR77scu" target="_blank">Alief Arrafi </a>| <a href="https://github.com/roufq" target="_blank">Ahmad Rouf</a> | <a href="https://creativedev.id" target="_blank">creative</a>
        </div>
    </div>
</div>
</footer>

<!-- jQuery 2.0.2 -->
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
<script src=" https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js " type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/AdminLTE/app.js" type="text/javascript"></script>
<script type="text/javascript">
    $('#custom-text').hide();
    $('#message').hide();
    $('#type-message').on('change', function() {
        var typeMessage = $(this).val();
        var messageId = $('#messageId').val();
        var messageName = $('#messageName').val();

        if (typeMessage == 0) {
            $('#custom-text').hide();
            var message = 'Hai ' + messageName + ', selamat anda sudah terdaftar menjadi calon peserta didik baru kelas unggulan MAN 2 PATI tahun 2021/2022\n\nUntuk konfirmasi pendaftaran silahkan masuk join group WhatsApp berikut: \n\nhttps://chat.whatsapp.com/JH03B22VLMVGQffp4Puekt \n\nDan berikut ini link untuk mencetak kartu pendaftaran anda. \n\nhttp://ppdb.man2pati.sch.id//Mastercontrol/cetak_kartu/' + messageId + ' \n\nTerimakasih atas partisipasinya.\n\n#MAN2PATI_BERSAHAJA';
        } else if (typeMessage == 1) {
            $('#custom-text').hide();
<<<<<<< HEAD
            $('#message').hide();
            $('#type-message').on('change', function() {
                var typeMessage = $(this).val();
                var messageId = $('#messageId').val();
                var messageName = $('#messageName').val();

                if (typeMessage == 0) {
                    $('#custom-text').hide();
                        var message = 'Hai '+ messageName +', selamat anda sudah terdaftar menjadi calon peserta didik baru kelas unggulan MAN 2 PATI tahun 2021/2022\n\nUntuk konfirmasi pendaftaran silahkan masuk join group WhatsApp berikut: \n\nhttps://chat.whatsapp.com/JH03B22VLMVGQffp4Puekt \n\nDan berikut ini link untuk mencetak kartu pendaftaran anda. \n\nhttp://ppdb.man2pati.sch.id//Mastercontrol/cetak_kartu/'+ messageId +' \n\nTerimakasih atas partisipasinya.\n\n#MAN2PATI_BERSAHAJA';
                }else if(typeMessage == 1) {
                    $('#custom-text').hide();
                    var message = 'Mohon maaf anda belom di terima di jalur unggulan karena nilai rata-rata raport kurang dari 80\n\nSelamat anda dinyatakan diterima dijalur regguler. silahkan untuk daftar ulang pada tanggal 12-15 maret 2021 di man 2 pati\n\n#MANPATI_BERSAHAJA';
                }else if(typeMessage == 2) {
                    $('#custom-text').show();
                    // var message = $('#custom-text').text();
                }else {
                    var message = 'Not Found';
                    alert('Not Fount');
                }

                $('#message').text(message);
            });

            $('#send-message').on('click', function() {
                var type = $('#type-message').val();

                if (type == 2) {
                    var message = $('#custom-text').val();
                }else {
                    var message = $('#message').val();
                }

                // alert(message);
                var messageId = $('#messageId').val();
                var phone = $('#messageNumber').val();

                if (type == 0) {
                    var status = 'Validate - Success';
                }else if(type == 1) {
                    var status = 'Validate - Failed';
                }else if(type == 2) {
                    var status = 'Validate - Send Custom Message';
                }else {
                    var status = 'Status Not Found'
                }

                var databaseId = $('#databaseId').val();
                swal.queue([{
                    title: 'Konfirmasi',
                    text: "Mohon Teliti data anda sebelum mengklik tombol 'Proses'",
                    icon: 'warning',
                    confirmButtonText: 'Proses',
                    showLoaderOnConfirm: true,
                    preConfirm: async function() {
                        $('#swal2-title').text('Proccessing...');
                        $('#swal2-content').text('Anda yakin ingin mengirim pesan ke');

                        await $.ajax({
                            url: 'http://206.189.46.208/waapi/sendMessage?token=033hbkrxYgIZt6li8BtF2qQwlUXt6C9dyDEa8DJJRxrm0',
=======
            var message = 'Mohon maaf anda belom di terima di jalur unggulan karena nilai rata-rata raport kurang dari 80\n\nSelamat anda dinyatakan diterima dijalur regguler. silahkan untuk daftar ulang pada tanggal 12-15 maret 2021 di man 2 pati\n\n#MANPATI_BERSAHAJA       ';
        } else if (typeMessage == 2) {
            $('#custom-text').show();
            // var message = $('#custom-text').text();
        } else {
            var message = 'Not Found';
            alert('Not Fount');
        }

        $('#message').text(message);
    });

    $('#send-message').on('click', function() {
        var type = $('#type-message').val();

        if (type == 2) {
            var message = $('#custom-text').val();
        } else {
            var message = $('#message').val();
        }

        // alert(message);
        var messageId = $('#messageId').val();
        var phone = $('#messageNumber').val();

        if (type == 0) {
            var status = 'Validate - Success';
        } else if (type == 1) {
            var status = 'Validate - Failed';
        } else if (type == 2) {
            var status = 'Validate - Send Custom Message';
        } else {
            var status = 'Status Not Found'
        }

        var databaseId = $('#databaseId').val();
        swal.queue([{
            title: 'Konfirmasi',
            text: "Mohon Teliti data anda sebelum mengklik tombol 'Proses'",
            icon: 'warning',
            confirmButtonText: 'Proses',
            showLoaderOnConfirm: true,
            preConfirm: async function() {
                $('#swal2-title').text('Proccessing...');
                $('#swal2-content').text('Anda yakin ingin mengirim pesan ke');

                await $.ajax({
                    url: 'http://206.189.46.208/waapi/sendMessage?token=033hbkrxYgIZt6li8BtF2qQwlUXt6C9dyDEa8DJJRxrm0',
                    type: 'POST',
                    data: {
                        type: 'chat',
                        phone: phone,
                        message: message
                    },
                    success: function(result) {

                        alert('sukses di kirim');

                    },
                    error: function(error) {
                        $.ajax({
                            url: '<?php echo base_url(); ?>Pendaftaran/status_update/' + databaseId,
>>>>>>> 8607ea377124c254bd1bd5c52df34596e4528eef
                            type: 'POST',
                            data: {
                                id: databaseId,
                                status: status
                            },
                            success: function(result) {
                                Swal.fire(
                                    'Terkirim!',
                                    'Silahkan cek whatsapp anda untuk memastikan bahwa pesan sudah terkirim secara sempurna',
                                    'success'
                                )
                            },
                            error: function(result) {},
                        });



                    }
                });
            }
        }]);
    });


    function pil() {
        if ($("#pill").val() == "Pilihan Ganda") {
            $("#pilg").show();
        } else {
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
        var css = {
            float: 'right'
        };
        $('#example1_filter').css(css);
    });
</script>
</body>

</html>