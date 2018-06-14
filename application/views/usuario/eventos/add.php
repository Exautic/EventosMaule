
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Publicacion de Eventos
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
                        <form action="<?php echo base_url(); ?>Usuario/Eventos/store" method="POST">
                            <div class="form-group">
                                <label for="nombre_evento">Nombre</label>
                                <input type="text" class="form-control" id="nombre_evento" name="nombre_evento">
                            </div>
                            <div class="form-group">
                                <label for="ciudad_evento">Ciudad</label>
                                <input type="text" class="form-control" id="ciudad_evento" name="ciudad_evento">
                            </div>
                            <div class="form-group">
                                <label for="direccion_evento">Direccion</label>
                                <input type="text" class="form-control" id="direccion_evento" name="direccion_evento">
                            </div>
                            <div class="form-group">
                                <label for="horai_evento">Hora Inicio</label>
                                <input type="text" class="form-control" id="horai_evento" name="horai_evento">
                            </div>
                            <div class="form-group">
                                <label for="horaf_evento">Hora Fin</label>
                                <input type="text" class="form-control" id="horaf_evento" name="horaf_evento">
                            </div>
                            <div class="form-group">
                                <label for="fecha_evento">Fecha</label>
                                <input type="text" class="form-control" id="fecha_evento" name="fecha_evento">
                            </div>
                            <div class="form-group">
                                <label for="descripcion_evento">Descripcion</label>
                                <input type="text" class="form-control" id="descripcion_evento" name="descripcion_evento">
                            </div>
                            <div class="form-group">
                                <label for="valor_evento">Valor Entrada</label>
                                <input type="text" class="form-control" id="valor_evento" name="valor_evento">
                            </div>
                            <div class="form-group">
                                <label for="categoria_id">Categoria</label>
                                <input type="text" class="form-control" id="categoria_id" name="categoria_id">
                            </div>
                            <div class="form-group">
                                <label for="estado_evento">Estado</label>
                                <input type="text" class="form-control" id="estado_evento" name="estado_evento">
                            </div>
                            <div class="form-group">
                                <label for="publicador">Publicador</label>
                                <input type="text" class="form-control" id="estado_evento" name="publicador" value="<?php echo $this->session->userdata("idusuario")?>">
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
