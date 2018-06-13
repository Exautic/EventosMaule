
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Categorias de Eventos
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
                        <a href="<?php echo base_url(); ?>Mantenimiento/Categorias_eventos/add" class='btn btn-primary btn-flat'><span class='fa fa-plus'></span>Agregar Categorias</a>

                    </div>
                </div>
                <hr>
                <div class='row'>
                    <div class='col-md-12'>
                        <table id="example1" class='table table-bordered btn-hover'>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre categoria</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($categoria_evento)): ?>
                                    <?php foreach ($categoria_evento as $categoria_evento): ?>
                                        <tr>
                                            <td><?php echo $categoria_evento->idcategoria_eventos; ?></td>
                                            <td><?php echo $categoria_evento->nombre_categoria; ?></td>
                                            <td>
                                                <div class='btn_group'>
                                                    <a href="<?php echo base_url();?>Mantenimiento/Categorias_eventos/edit/<?php echo $categoria_evento->idcategoria_eventos ?>" class='btn btn-warning'><span class='fa fa-pencil'></span></a>
                                                    <button type="button" class="btn btn-info btn-view" data-toggle="modal" data-target="#modal-default" value="<?php echo $categoria_evento->idcategoria_eventos ?>">
                                                        <span class="fa fa-search"></span>
                                                    </button>
                                                    <a href="<?php echo base_url();?>Mantenimiento/Categorias_eventos/delete/<?php echo $categoria_evento->idcategoria_eventos ?>" class='btn btn-danger btn_remove'><span class='fa fa-remove'></span></a>
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
                <h4 class="modal-title">Informacion de la Categoria</h4>
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
