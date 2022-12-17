<!-- Back to top -->
<a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 right-5 h-9 w-9 text-center bg-indigo-600 text-white leading-9"><i class="uil uil-arrow-up"></i></a>
<!-- Back to top -->


<!-- JAVASCRIPTS -->
<script src="<?= base_url(); ?>landing-assets/libs/wow.js/wow.min.js"></script>
<script src="<?= base_url(); ?>landing-assets/libs/tobii/js/tobii.min.js"></script>
<script src="<?= base_url(); ?>landing-assets/libs/tiny-slider/min/tiny-slider.js"></script>
<script src="<?= base_url(); ?>landing-assets/libs/feather-icons/feather.min.js"></script>
<script src="<?= base_url(); ?>landing-assets/js/plugins.init.js"></script>
<script src="<?= base_url(); ?>landing-assets/js/app.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    var pesan = '<?= $this->session->flashdata('pesan'); ?>'
    if (pesan) {
        Swal.fire({
            title: 'Informasi Error',
            text: pesan,
            icon: 'error',
            confirmButtonText: 'Tutup'
        })
    }
</script>