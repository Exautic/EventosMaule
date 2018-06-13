
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Eventos en la Plataforma
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
                        <a href="<?php echo base_url(); ?>Mantenimiento/Eventos/add" class='btn btn-primary btn-flat'><span class='fa fa-plus'></span>Publicar Evento</a>
                    </div>
                </div>
                <hr>
                <div class='row'>
                    <div class='col-md-12'>
                        <table id="example1" class='table table-bordered btn-hover'>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Ciudad</th>
                                    <th>Fecha</th>
                                    <th>Categoria</th>
                                    <th>Estado</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($eventos)): ?>
                                    <?php foreach ($eventos as $eventos): ?>
                                        <tr>
                                            <td><?php echo $eventos->ideventos; ?></td>
                                            <td><?php echo $eventos->nombre_evento; ?></td>
                                            <td><?php echo $eventos->ciudad_evento; ?></td>
                                            <td><?php echo $eventos->fecha_evento; ?></td>
                                            <td><?php echo $eventos->categoria_id; ?></td>
                                            <td><?php echo $eventos->estado_evento; ?></td>
                                            <td>
                                                <div class='btn_group'>
                                                    <a href="<?php echo base_url();?>Mantenimiento/Eventos/edit/<?php echo $eventos->ideventos ?>" class='btn btn-warning'><span class='fa fa-pencil'></span></a>
                                                    <button type="button" class="btn btn-info btn-view2" data-toggle="modal" data-target="#modal-default" value="<?php echo $eventos->ideventos ?>">
                                                        <span class="fa fa-search"></span>
                                                    </button>
                                                    <a href="<?php echo base_url();?>Mantenimiento/Eventos/delete/<?php echo $eventos->ideventos ?>" class='btn btn-danger btn_remove2'><span class='fa fa-remove'></span></a>
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
