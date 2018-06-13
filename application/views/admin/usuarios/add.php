
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Registro Usuarios
            <small>Nuevo</small>
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
                        <form action="<?php echo base_url(); ?>Mantenimiento/Usuarios/store" method="POST">
                            <div class="form-group">
                                <label for="nombre_usuario">Nombre</label>
                                <input type="text" class="form-control" id="nombre_usuario" name="nombre_usuario">
                            </div>
                            <div class="form-group">
                                <label for="apellido_usuario">Apellido</label>
                                <input type="text" class="form-control" id="apellido_usuario" name="apellido_usuario">
                            </div>
                            <div class="form-group">
                                <label for="telefono">Telefono</label>
                                <input type="text" class="form-control" id="telefono" name="telefono">
                            </div>
                            <div class="form-group">
                                <label for="ciudad_usuario">Ciudad</label>
                                <input type="text" class="form-control" id="ciudad_usuario" name="ciudad_usuario">
                            </div>
                            <div class="form-group">
                                <label for="email_usuario">E-Mail</label>
                                <input type="text" class="form-control" id="email_usuario" name="email_usuario">
                            </div>
                            <div class="form-group">
                                <label for="user_usuario">User</label>
                                <input type="text" class="form-control" id="user_usuario" name="user_usuario">
                            </div>
                            <div class="form-group">
                                <label for="clave_usuario">Clave</label>
                                <input type="text" class="form-control" id="clave_usuario" name="clave_usuario">
                            </div>
                            <div class="form-group">
                                <label for="rol_id">ROL</label>
                                <input type="text" class="form-control" id="rol_id" name="rol_id">
                            </div>
                            <div class="form-group">
                                <label for="estado_usuario">Estado</label>
                                <input type="text" class="form-control" id="estado_usuario" name="estado_usuario">
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
