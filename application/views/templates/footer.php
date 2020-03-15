</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->


<!-- Main Footer -->
<footer class="main-footer text-center">
    <strong>Copyright &copy; 2020 Andi Mujur </strong>


</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="<?= base_url('assets/vendor/') ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?= base_url('assets/vendor/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url('assets/vendor/') ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/vendor/') ?>dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="<?= base_url('assets/vendor/') ?>dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="<?= base_url('assets/vendor/') ?>plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="<?= base_url('assets/vendor/') ?>plugins/raphael/raphael.min.js"></script>
<script src="<?= base_url('assets/vendor/') ?>plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="<?= base_url('assets/vendor/') ?>plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url('assets/vendor/') ?>plugins/chart.js/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="<?= base_url('assets/vendor/') ?>dist/js/pages/dashboard2.js"></script>
<script src="<?= base_url('assets/vendor/') ?>plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="<?= base_url('assets/vendor/') ?>plugins/toastr/toastr.min.js"></script>

<script src="<?= base_url('assets/') ?>js/myscript.js"></script>

<script type="text/javascript">
    $(function() {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
        const flashData = $('.flashdata').data('flashdata');
        console.log(flashData);
        if (flashData) {
            toastr.error(flashData)
        }

    });
</script>
</body>

</html>