<!-- build:js assets/vendor/js/core.js -->
<script src="<?= base_url(); ?>assets/vendor/libs/jquery/jquery.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
<script src="<?= base_url(); ?>assets/vendor/libs/popper/popper.js"></script>
<script src="<?= base_url(); ?>assets/vendor/js/bootstrap.js"></script>
<script src="<?= base_url(); ?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="<?= base_url(); ?>assets/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="<?= base_url(); ?>assets/vendor/libs/apex-charts/apexcharts.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Main JS -->
<script src="<?= base_url(); ?>assets/js/main.js"></script>

<!-- Page JS -->
<script src="<?= base_url(); ?>assets/js/ui-toasts.js"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    var pesan = "<?= $this->session->flashdata('pesan'); ?>"

    $(document).ready(function() {
        $('#datatable').DataTable();

        if (pesan) {
            Swal.fire({
                title: 'Informasi',
                text: pesan,
                icon: 'success',
                confirmButtonText: 'Tutup'
            })
        }
    })
</script>