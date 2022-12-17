<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">

<head>
    <?php
    $data = [
        'title' => 'Ide Baru'
    ];
    ?>

    <?php $this->load->view('layout_landing/head', $data); ?>
    <style>
        .btn-kirim {
            width: 150px;
        }

        @media only screen and (max-width: 760px) {
            .btn-kirim {
                width: 100%;
            }
        }
    </style>
</head>

<body class="font-nunito text-base text-black dark:text-white dark:bg-slate-900">

    <?php $this->load->view('layout_landing/navbar', $data); ?>

    <!-- Start Hero -->
    <section class="relative items-center relative">
        <div class="container z-2 mt-32">
            <h4 class="text-xl lg:text-3xl font-bold tracking-wide mb-4 lg:mb-8"><?= $data['title']; ?></h4>
            <p class="mb-4">Punya ide baru untuk pembaharuan laman ini? silahkan isi form berikut.</p>
            <div>
                <form action="<?= base_url('LandingPageController/tambahIdeBaru') ?>" method="POST">
                    <textarea class="w-full mb-4 p-4 outline-none rounded bg-transparent border-b border-r border-gray-400" name="ide" id="ide" rows="8" placeholder="Silahkan tulis ide Anda disini" required></textarea>
                    <button class="btn text-white rounded-md bg-primary float-right btn-kirim">Kirim</button>
                </form>
            </div>
            <!--end grid-->

            <!-- Lis kata mobile -->
        </div>
        <!--end container-->
    </section>
    <!-- End Hero -->

    <?php $this->load->view('layout_landing/script', $data); ?>
    <script>
        var pesan_success = '<?= $this->session->flashdata('pesan_success'); ?>'
        if (pesan_success) {
            Swal.fire({
                title: 'Terima Kasih',
                text: pesan_success,
                icon: 'success',
                confirmButtonText: 'Tutup'
            })
        }
    </script>
    <!-- JAVASCRIPTS -->
</body>

</html>