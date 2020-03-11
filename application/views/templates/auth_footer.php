<script src="<?= base_url('assets/vendor/') ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/vendor/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SweetAlert2 -->
<script src="<?= base_url('assets/vendor/') ?>plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="<?= base_url('assets/vendor/') ?>plugins/toastr/toastr.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/vendor/') ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('assets/vendor/') ?>dist/js/demo.js"></script>

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
    $('#tombol').click(function() {

        return $('#spinner').addClass('spinner-border spinner-border-sm');
    });
</script>

</body>

</html>