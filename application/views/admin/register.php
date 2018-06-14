<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 2 | Log in</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <!-- base_url() = http://localhost/ventas_ci/-->

        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/font-awesome/css/font-awesome.min.css">

        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/dist/css/AdminLTE.min.css">

    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <h2>Eventos Maule</h2>
            </div>
            <!-- /.login-logo -->
            <div class="login-box-body">
                <p class="login-box-msg">Introduzca sus datos de registro</p>
                <?php if ($this->session->flashdata("error")): ?>
                    <div class='alert alert-danger'>
                        <p><?php echo $this->session->flashdata("error") ?></p>
                    </div>
                <?php endif; ?>
                <form action="<?php echo base_url(); ?>auth/registro" method="post">
                    <div class="form-group has-feedback">
                        <input id="nombre_usuario" name="nombre_usuario" type="text" class="form-control" placeholder="Nombre">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input id="apellido_usuario" name="apellido_usuario" type="text" class="form-control" placeholder="Apellido">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input id="telefono" name="telefono" type="text" class="form-control" placeholder="Telefono">
                        <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input id="ciudad_usuario" name="ciudad_usuario" type="text" class="form-control" placeholder="Ciudad">
                        <span class="glyphicon glyphicon-map-marker form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input id="email_usuario" name="email_usuario" type="text" class="form-control" placeholder="E-Mail">
                        <span class="glyphicon glyphicon-bookmark form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input id="user_usuario" name="user_usuario" type="text" class="form-control" placeholder="Usuario">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input  id="clave_usuario" name="clave_usuario" type="password" class="form-control" placeholder="Password">
                        <span class="glyphicon glyphicon-link form-control-feedback"></span>
                    </div>
                    
                    <div class="row">
                        <div class="col-xs-12">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Registrarse</button>
                        </div>
                        <!-- /.col -->
                    </div>
                    <br>
                </form>
                <form action="<?php echo base_url(); ?>auth/index" method="post">
                    <div class="row">
                        <div class="col-xs-12">
                            <button type="submit" class="btn btn-success btn-block btn-flat">Volver</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.login-box-body -->
        </div>
        <!-- /.login-box -->

        <!-- jQuery 3 -->
        <script src="<?php echo base_url(); ?>assets/template/jquery/jquery.min.js"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="<?php echo base_url(); ?>assets/template/bootstrap/js/bootstrap.min.js"></script>

    </body>
</html>