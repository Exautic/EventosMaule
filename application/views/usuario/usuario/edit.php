
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Usuario registrado
            <small>Editar</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class='row'>
                    <div class='col-md-12'>
                        <?php if ($this->session->flashdata("error")): ?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <p><i class="icon fa fa-ban"><?php echo $this->session->flashdata("error")?></i></p>
                            </div>
                        <?php endif; ?>
                        <form action="<?php echo base_url(); ?>Usuario/Usuarios/update" method="POST">
                            <input type="hidden" value="<?php echo $usuarios->idusuarios ?>" name="idusuarios">
                            <div class="form-group">
                                <label for="nombre_usuario">Nombre</label>
                                <input type="text" class="form-control" id="nombre_usuario" name="nombre_usuario" value="<?php echo $usuarios->nombre_usuario ?>">
                            </div>
                            <div class="form-group">
                                <label for="apellido_usuario">Apellido</label>
                                <input type="text" class="form-control" id="apellido_usuario" name="apellido_usuario" value="<?php echo $usuarios->apellido_usuario ?>">
                            </div>
                            <div class="form-group">
                                <label for="telefono">Telefono</label>
                                <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo $usuarios->telefono ?>">
                            </div>
                            <div class="form-group">
                                <label for="ciudad_usuario">Ciudad</label>
                                <input type="text" class="form-control" id="ciudad_usuario" name="ciudad_usuario" value="<?php echo $usuarios->ciudad_usuario ?>">
                            </div>
                            <div class="form-group">
                                <label for="email_usuario">E-Mail</label>
                                <input type="text" class="form-control" id="email_usuario" name="email_usuario" value="<?php echo $usuarios->email_usuario ?>">
                            </div>
                            <div class="form-group">
                                <label for="user_usuario">User</label>
                                <input type="text" class="form-control" id="user_usuario" name="user_usuario" value="<?php echo $usuarios->user_usuario ?>">
                            </div>
                            <div class="form-group">
                                <label for="clave_usuario">Clave</label>
                                <input type="text" class="form-control" id="clave_usuario" name="clave_usuario" value="<?php echo $usuarios->clave_usuario ?>">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-flat">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
