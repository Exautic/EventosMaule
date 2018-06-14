
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Permisos de usuarios
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
                        
                            <a href="<?php echo base_url(); ?>Administrador/Permisos/add" class='btn btn-primary btn-flat'><span class='fa fa-plus'></span>Agregar permiso</a>
                        
                    </div>
                </div>
                <hr>
                <div class='row'>
                    <div class='col-md-12'>
                        <table id="example1" class='table table-bordered btn-hover'>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Menu</th>
                                    <th>Rol</th>
                                    <th>Leer</th>
                                    <th>Insertar</th>
                                    <th>Actualizar</th>
                                    <th>Eliminar</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($permisos)): ?>
                                    <?php foreach ($permisos as $permisos): ?>
                                        <tr>
                                            <td><?php echo $permisos->idpermisos; ?></td>
                                            <td><?php echo $permisos->idmenu; ?></td>
                                            <td><?php echo $permisos->idroles; ?></td>
                                            <td>
                                                <?php if ($permisos->read == 0): ?>
                                                    <span class="fa fa-times"></span>
                                                <?php else: ?>
                                                    <span class="fa fa-check"></span>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if ($permisos->insert == 0): ?>
                                                    <span class="fa fa-times"></span>
                                                <?php else: ?>
                                                    <span class="fa fa-check"></span>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if ($permisos->update == 0): ?>
                                                    <span class="fa fa-times"></span>
                                                <?php else: ?>
                                                    <span class="fa fa-check"></span>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if ($permisos->delete == 0): ?>
                                                    <span class="fa fa-times"></span>
                                                <?php else: ?>
                                                    <span class="fa fa-check"></span>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <div class='btn_group'>
                                                    <?php if ($permisos->update == 1): ?>
                                                    <a href="<?php echo base_url(); ?>Administrador/Permisos/edit/<?php echo $permisos->idpermisos ?>" class='btn btn-warning'><span class='fa fa-pencil'></span></a>
                                                    <?php endif; ?>
                                                    <?php if ($permisos->delete == 1): ?>
                                                    <a href="<?php echo base_url(); ?>Administrador/Permisos/delete/<?php echo $permisos->idpermisos ?>" class='btn btn-danger btn_remove3'><span class='fa fa-remove'></span></a>
                                                    <?php endif; ?>
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
