<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2018-2019 <a href="https://github.com/Exautic/EventosMaule">GitHub Eventos Maule</a>.</strong> All rights
    reserved.
</footer>
</div>
<!-- ./wrapper -->
<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>assets/template/jquery/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>assets/template/bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url(); ?>assets/template/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>assets/template/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/template/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>assets/template/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/template/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/template/dist/js/demo.js"></script>
<script>
    $(document).ready(function () {
        //Modales Admin Categoria
        $('.btn-view').on("click", function () {
            var base_url = "<?php echo base_url(); ?>";
            var idcategoria_eventos = $(this).val();
            $.ajax({
                url: base_url + "Mantenimiento/Categorias_eventos/view/" + idcategoria_eventos,
                type: 'POST',
                success: function (resp) {
                    $("#modal-default .modal-body").html(resp);
                    //alert(resp);
                }
            });
        });
        $('.btn_remove').on("click", function (e) {
            e.preventDefault();
            var ruta = $(this).attr("href");
            $.ajax({
                url: ruta,
                type: 'POST',
                success: function (resp) {
                    window.location.href = base_url + resp;
                }
            });
        });
        //Modales Admin Usuario
        $('.btn-view1').on("click", function () {
            var base_url = "<?php echo base_url(); ?>";
            var idusuarios = $(this).val();
            $.ajax({
                url: base_url + "Mantenimiento/Usuarios/view/" + idusuarios,
                type: 'POST',
                success: function (resp) {
                    $("#modal-default .modal-body").html(resp);
                    //alert(resp);
                }
            });
        });
        $('.btn_remove1').on("click", function (e) {
            e.preventDefault();
            var ruta = $(this).attr("href");
            $.ajax({
                url: ruta,
                type: 'POST',
                success: function (resp) {
                    window.location.href = base_url + resp;
                }
            });
        });
        //Modales Admin Evento
        $('.btn-view2').on("click", function () {
            var base_url = "<?php echo base_url(); ?>";
            var ideventos = $(this).val();
            $.ajax({
                url: base_url + "Mantenimiento/Eventos/view/" + ideventos,
                type: 'POST',
                success: function (resp) {
                    $("#modal-default .modal-body").html(resp);
                    //alert(resp);
                }
            });
        });
        $('.btn_remove2').on("click", function (e) {
            e.preventDefault();
            var ruta = $(this).attr("href");
            $.ajax({
                url: ruta,
                type: 'POST',
                success: function (resp) {
                    window.location.href = base_url + resp;
                }
            });
        });

        //Modales User Usuario
        $('.btn-viewUser').on("click", function () {
            var base_url = "<?php echo base_url(); ?>";
            var ideventos = $(this).val();
            $.ajax({
                url: base_url + "Mantenimiento/Eventos/view/" + ideventos,
                type: 'POST',
                success: function (resp) {
                    $("#modal-default .modal-body").html(resp);
                    //alert(resp);
                }
            });
        });
        $('.btn_removeUser').on("click", function (e) {
            e.preventDefault();
            var ruta = $(this).attr("href");
            $.ajax({
                url: ruta,
                type: 'POST',
                success: function (resp) {
                    window.location.href = base_url + resp;
                }
            });
        });

        //Modales User Evento
        $('.btn-viewEvento').on("click", function () {
            var base_url = "<?php echo base_url(); ?>";
            var ideventos = $(this).val();
            $.ajax({
                url: base_url + "Usuario/Eventos/view/" + ideventos,
                type: 'POST',
                success: function (resp) {
                    $("#modal-default .modal-body").html(resp);
                    //alert(resp);
                }
            });
        });
        $('.btn_removeEvento').on("click", function (e) {
            e.preventDefault();
            var ruta = $(this).attr("href");
            $.ajax({
                url: ruta,
                type: 'POST',
                success: function (resp) {
                    window.location.href = base_url + resp;
                }
            });
        });

        //Tabla
        $('#example1').DataTable();

        $('.sidebar-menu').tree();
    })
</script>
</body>
</html>
