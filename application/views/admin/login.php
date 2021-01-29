<!DOCTYPE html>
<html style="background-color: #ddd;">
    <head>
        <meta charset="UTF-8">
        <title>PSB | Log in</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url();?>assets/css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/img/logo1.png" rel="icon">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body style="background-color: #ddd;">

        <div class="form-box" id="login-box">
            <div class="header" style="background-color: #377b41;">
              <img src="<?php echo base_url();?>assets/img/logo1.png" width="80" height="80">
              <p style="margin-top: 10px;">Sig In PPDB</p>
            </div>
           <?php echo form_open('login/aksi_login');?>
                <div class="body bg-success">
                    <div class="form-group">
                        <input type="text" name="username" class="form-control" placeholder="User ID"/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password"/>
                    </div>          
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Login" name="login" style="width: 100%;" class="form-control"/>
                    </div>
                    <div class="form-group">
                    &copy; Copyright <strong></strong><a href="https://github.com/HR77scu" target="_blank">Alief Arrafi </a>| <a href="https://github.com/roufq" target="_blank">Ahmad Rouf</a> | <a href="https://creativedev.id" target="_blank">creative</a>
                    </div>
                </div>
          <?php echo form_close();?>

        </div>


        <!-- jQuery 2.0.2 -->
        <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="<?php echo base_url();?>assets/js/bootstrap.min.js" type="text/javascript"></script>        

    </body>
</html>