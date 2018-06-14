
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Permisos
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
                        <form action="<?php echo base_url(); ?>Administrador/Permisos/store" method="POST">
                            <div class="form-group">
                                <label for="roles_usuarios">Roles:</label>
                                <select name="roles_usuarios" id="roles_usuarios" class="form-control">
                                    <?php foreach($roles_usuarios as $roles_usuarios):?>
                                    <option value="<?php echo $roles_usuarios->idroles_usuarios?>"><?php echo $roles_usuarios->tipo_usuario?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="menus">Menus:</label>
                                <select name="menus" id="menus" class="form-control">
                                    <?php foreach($menus as $menus):?>
                                    <option value="<?php echo $menus->idmenu?>"><?php echo $menus->nombre_menu?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="read">Leer:</label>
                                <label class="radio-inline">
                                    <input type="radio" name="read" value="1" checked="checked">SI 
                               </label>
                                <label class="radio-inline">
                                    <input type="radio" name="read" value="0">NO 
                               </label>
                            </div>
                            <div class="form-group">
                                <label for="insert">Agregar:</label>
                                <label class="radio-inline">
                                    <input type="radio" name="insert" value="1" checked="checked">SI 
                               </label>
                                <label class="radio-inline">
                                    <input type="radio" name="insert" value="0">NO 
                               </label>
                            </div>
                            <div class="form-group">
                                <label for="update">Actualizar:</label>
                                <label class="radio-inline">
                                    <input type="radio" name="update" value="1" checked="checked">SI 
                               </label>
                                <label class="radio-inline">
                                    <input type="radio" name="update" value="0">NO 
                               </label>
                            </div>
                            <div class="form-group">
                                <label for="delete">Eliminar:</label>
                                <label class="radio-inline">
                                    <input type="radio" name="delete" value="1" checked="checked">SI 
                               </label>
                                <label class="radio-inline">
                                    <input type="radio" name="delete" value="0">NO 
                               </label>
                            </div>
                            
                            <div class="form-group">
                                <button type="submit" class="btn btn-success"><span class="fa fa-save"></span>Guardar</button>
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
