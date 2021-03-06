
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Categorias de Eventos
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
                        <form action="<?php echo base_url(); ?>Mantenimiento/Categorias_eventos/update" method="POST">
                            <input type="hidden" value="<?php echo $categoria_eventos->idcategoria_eventos ?>" name="idcategoria_eventos">
                            <div class="form-group">
                                <label for="nombre_categorias">Nombre</label>
                                <input type="text" class="form-control" id="nombre_categorias" name="nombre_categorias" value="<?php echo $categoria_eventos->nombre_categoria ?>">
                            </div>
                            <div class="form-group">
                                <label for="estado_categorias">Estado</label>
                                <input type="text" class="form-control" id="nombre_categorias" name="estado_categorias" value="<?php echo $categoria_eventos->estado_categoria ?>">
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
