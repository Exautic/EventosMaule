
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Usuario de la plataforma
            <small>Listado</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <hr>
                <div class='row'>
                    <div class='col-md-12'>
                        <table id="example1" class='table table-bordered btn-hover'>
                            <thead>
                                <tr>
                                    <th>E-mail</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Telefono</th>
                                    <th>Ciudad</th>
                                    <th>User</th>
                                    <th>Clave</th>
                                    <th>Editar Informacion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($usuarios)): ?>
                                    <?php foreach ($usuarios as $usuarios): ?>
                                        <tr>
                                            <td><?php echo $usuarios->email_usuario; ?></td>
                                            <td><?php echo $usuarios->nombre_usuario; ?></td>
                                            <td><?php echo $usuarios->apellido_usuario; ?></td>
                                            <td><?php echo $usuarios->telefono; ?></td>
                                            <td><?php echo $usuarios->ciudad_usuario; ?></td>
                                            <td><?php echo $usuarios->user_usuario; ?></td>
                                            <td><?php echo $usuarios->clave_usuario; ?></td>
                                            <td>
                                                <div class='btn_group'>
                                                    <a href="<?php echo base_url(); ?>Usuario/Usuarios/edit/<?php echo $usuarios->idusuarios ?>" class='btn btn-warningEdit'><span class='fa fa-pencil'></span></a>
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
