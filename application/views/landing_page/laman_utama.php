<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">

<head>
    <?php
    $data = [
        'title' => 'Laman Utama'
    ];
    ?>

    <?php $this->load->view('layout_landing/head', $data); ?>
</head>

<body class="font-nunito text-base text-black dark:text-white dark:bg-slate-900">

    <?php $this->load->view('layout_landing/navbar', $data); ?>

    <!-- Start Hero -->
    <section class="relative items-center relative">
        <div class="container z-2">
            <div class="flex flex-col justify-center items-center h-screen">
                <div class="mb-6">
                    <img class="w-52 wow animate__animated animate__fadeIn" src="<?= base_url('landing-assets/images/logo-hero.png') ?>" alt="Logo Hero">
                </div>

                <div class="wow animate__animated animate__fadeIn flex justify-center items-center gap-4 relative lg:ml-24">
                    <!-- Burung -->
                    <div class="absolute -left-24 -top-44 hidden lg:flex">
                        <img class="w-44" src="<?= base_url('landing-assets/images/burung-group.png') ?>" alt="Burung">
                    </div>
                    <div>
                        <form action="<?= base_url('detail-kata') ?>" method="POST" class="flex gap-4">
                            <div class="relative flex justify-center items-center gap-4">
                                <input required name="kata" type="text" class="text-black px-3 py-2 outline-none rounded w-[200px] lg:w-[450px]" placeholder="Masukkan kata">
                                <i class="absolute uil uil-search text-[18px] right-2 top-2 z-10 text-black"></i>
                            </div>
                            <button class="btn text-white rounded-md bg-primary">Cari</button>
                        </form>
                    </div>
                </div>
            </div>
            <!--end grid-->

            <!-- Lis kata mobile -->
        </div>

        <div class="absolute bottom-0 p-3 bg-yellow-300 w-full rounded-t-2xl flex justify-center lg:invisible z-10" id="buka-modal">
            <img class="w-14 left-4 bottom-12 absolute" src="<?= base_url('landing-assets/images/burung.png') ?>" alt="Burung">
            <i class="uil uil-bars text-[25px]"></i>
        </div>
        <!--end container-->
    </section>

    <!-- Modal Kata -->
    <div id="modal-kata" class="absolute hidden w-full h-screen bg-black/10 top-0 z-[999] flex justify-center items-center px-8 py-12">
        <div class="bg-white w-full h-full rounded-2xl p-4 relative">
            <div class="w-full h-[40px] bg-yellow-300 absolute left-0 -top-8 -z-1 rounded-t-2xl flex justify-center items-center" id="tutup-modal">
                <i class="uil uil-bars text-[22px] mb-1"></i>
            </div>
            <h4 class="text-center font-bold text-lg mb-2 rounded-t-2xl">LIS KATA</h4>
            <p class="text-gray-400 text-sm text-justify mb-4">
                Karena terbatasnya ujaran baru yang terkumpul, kamu hanya bisa mencari kata dengan cara gulir di bawah ini.
            </p>
            <div class="overflow-auto max-h-[412px]">
                <?php foreach ($kata as $key => $value) { ?>
                    <div class="font-semibold text-gray-500 tracking-wide px-3 py-1"><?= $value->kata; ?></div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!--end section-->
    <!-- End Hero -->

    <?php $this->load->view('layout_landing/script', $data); ?>

    <script>
        document.getElementById('buka-modal').addEventListener('click', function() {
            document.getElementById('modal-kata').classList.remove('hidden')
        })

        document.getElementById('tutup-modal').addEventListener('click', function() {
            document.getElementById('modal-kata').classList.add('hidden')
        })
    </script>
    <!-- JAVASCRIPTS -->
</body>

</html>