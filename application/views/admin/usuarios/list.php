
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Usuarios de la plataforma
            <small>Listado</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class='row'>
                    <div class='col-md-12'>
                        <a href="<?php echo base_url(); ?>Mantenimiento/Usuarios/add" class='btn btn-primary btn-flat'><span class='fa fa-plus'></span>Agregar Usuarios</a>

                    </div>
                </div>
                <hr>
                <div class='row'>
                    <div class='col-md-12'>
                        <table id="example1" class='table table-bordered btn-hover'>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>E-mail</th>
                                    <th>User</th>
                                    <th>Clave</th>
                                    <th>Rol</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($usuarios)): ?>
                                    <?php foreach ($usuarios as $usuarios): ?>
                                        <tr>
                                            <td><?php echo $usuarios->idusuarios; ?></td>
                                            <td><?php echo $usuarios->email_usuario; ?></td>
                                            <td><?php echo $usuarios->user_usuario; ?></td>
                                            <td><?php echo $usuarios->clave_usuario; ?></td>
                                            <td><?php echo $usuarios->rol_id; ?></td>
                                            <td>
                                                <div class='btn_group'>
                                                    <a href="<?php echo base_url();?>Mantenimiento/Usuarios/edit/<?php echo $usuarios->idusuarios ?>" class='btn btn-warning'><span class='fa fa-pencil'></span></a>
                                                    <button type="button" class="btn btn-info btn-view1" data-toggle="modal" data-target="#modal-default" value="<?php echo $usuarios->idusuarios ?>">
                                                        <span class="fa fa-search"></span>
                                                    </button>
                                                    <a href="<?php echo base_url();?>Mantenimiento/Usuarios/delete/<?php echo $usuarios->idusuarios ?>" class='btn btn-danger btn_remove1'><span class='fa fa-remove'></span></a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
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


<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Informacion del Usuario</h4>
            </div>
            <div class="modal-body">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
