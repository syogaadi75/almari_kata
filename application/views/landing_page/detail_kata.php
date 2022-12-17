<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">

<head>
    <?php
    $data = [
        'title' => 'Detail Kata'
    ];
    ?>

    <?php $this->load->view('layout_landing/head', $data); ?>
</head>

<body class="font-nunito text-base text-black dark:text-white dark:bg-slate-900">

    <?php $this->load->view('layout_landing/navbar', $data); ?>

    <!-- Start Hero -->
    <section class="relative items-center relative">
        <div class="container z-2 mt-32">
            <div class="flex justify-between mb-8">
                <div>
                    <h4 class="text-xl lg:text-3xl font-bold tracking-wide mb-2 lg:mb-8"><?= $kata->kata; ?></h4>
                    <div class="flex gap-2 items-center">
                        <span>Teridentifikasi di</span>
                        <button class="p-3 w-5 h-5 rounded-full bg-primary flex items-center justify-center text-white" id="buka-modal">
                            <i class="uil uil-question text-[22px]"></i>
                        </button>
                    </div>
                    <div class="text-gray-500 italic text-sm"><?= $kata->ejaan; ?> / <?= $kata->kata; ?></div>
                </div>
                <div class="hidden lg:flex">
                    <form action="<?= base_url('detail-kata') ?>" method="POST" class="flex items-center gap-4">
                        <div class="relative flex justify-center items-center gap-4">
                            <input required name="kata" type="text" class="text-black px-9 py-2 outline-none rounded w-[200px] lg:w-[450px]" placeholder="Cari kata lain">
                            <i class="absolute uil uil-search text-[18px] left-2 top-2 z-10 text-gray-400"></i>
                        </div>
                        <button type="submit" class="btn text-white rounded-md bg-primary">Cari</button>
                    </form>
                </div>
            </div>

            <div class="flex flex-col bg-white p-4 rounded-lg mb-4">
                <div class="flex justify-between items-center">
                    <div class="text-lg font-bold w-full lg:w-1/6">
                        Arti/Makna
                    </div>
                    <div class=" text-gray-500 hidden lg:flex">
                        <?= substr($kata->arti, 0, 80); ?>...
                    </div>
                    <div>
                        <div class="mdi mdi-chevron-right text-[25px] cursor-pointer transition-all ease-linear" id="arti"></div>
                    </div>
                </div>
                <div class="mt-5 hidden" id="isi-arti">
                    <?= $kata->arti; ?>
                </div>
            </div>
            <div class="flex flex-col bg-white p-4 rounded-lg mb-4">
                <div class="flex justify-between items-center">
                    <div class="text-lg font-bold w-full lg:w-1/6">
                        Kategori Sintaksis
                    </div>
                    <div class=" text-gray-500 hidden lg:flex">
                        <?= substr($kata->kategori_sintaksis, 0, 80); ?>...
                    </div>
                    <div>
                        <div class="mdi mdi-chevron-right text-[25px] cursor-pointer transition-all ease-linear" id="kategori"></div>
                    </div>
                </div>
                <div class="mt-5 hidden" id="isi-kategori">
                    <?= $kata->kategori_sintaksis; ?>
                </div>
            </div>
            <div class="flex flex-col bg-white p-4 rounded-lg mb-4">
                <div class="flex justify-between items-center">
                    <div class="text-lg font-bold w-full lg:w-1/6">
                        Semantik
                    </div>
                    <div class=" text-gray-500 hidden lg:flex">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit....
                    </div>
                    <div>
                        <div class="mdi mdi-chevron-right text-[25px] cursor-pointer transition-all ease-linear" id="semantik"></div>
                    </div>
                </div>
                <div class="mt-5 hidden" id="isi-semantik">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique architecto veniam soluta quis, tempore sunt at ipsa aliquid doloremque sint accusamus facilis voluptatum fuga porro non? Dolorum corporis dolore explicabo?
                </div>
            </div>
            <div class="flex flex-col bg-white p-4 rounded-lg mb-4">
                <div class="flex justify-between items-center">
                    <div class="text-lg font-bold w-full lg:w-1/6">
                        Sosial
                    </div>
                    <div class=" text-gray-500 hidden lg:flex">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit....
                    </div>
                    <div>
                        <div class="mdi mdi-chevron-right text-[25px] cursor-pointer transition-all ease-linear" id="sosial"></div>
                    </div>
                </div>
                <div class="mt-5 hidden" id="isi-sosial">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique architecto veniam soluta quis, tempore sunt at ipsa aliquid doloremque sint accusamus facilis voluptatum fuga porro non? Dolorum corporis dolore explicabo?
                </div>
            </div>
            <!--end grid-->

            <!-- Lis kata mobile -->
        </div>
        <!--end container-->
    </section>
    <!-- End Hero -->

    <!-- Modal Tanda Tanya -->
    <div class="absolute top-0 w-full h-full bg-black/20 z-[999] flex justify-center items-center hidden" id="modal">
        <div class="w-[300px] h-[200px] bg-white rounded-xl relative">
            <div class="w-[40px] h-[40px] bg-white absolute -top-3 -right-3 z-1 flex justify-center items-center rounded-lg shadow-lg cursor-pointer hover:-top-2 transition-all ease-linear" id="tutup-modal">
                <i class="mdi mdi-close text-[25px]"></i>
            </div>
            <div class="p-4">
                <div class="text-xl font-bold mb-3 tracking-wide">Jebret</div>
                <div class="text-gray-500">
                    Kata ini dipopulerkan oleh seseorang bernama John Doe, pada siaran televisi.
                </div>
            </div>
        </div>

    </div>

    <?php $this->load->view('layout_landing/script', $data); ?>

    <script>
        const arti = document.getElementById('arti')
        const isiArti = document.getElementById('isi-arti')

        arti.addEventListener('click', function() {
            arti.classList.toggle('rotate-90')
            isiArti.classList.toggle('hidden')
        })

        const kategori = document.getElementById('kategori')
        const isikategori = document.getElementById('isi-kategori')

        kategori.addEventListener('click', function() {
            kategori.classList.toggle('rotate-90')
            isikategori.classList.toggle('hidden')
        })

        const semantik = document.getElementById('semantik')
        const isisemantik = document.getElementById('isi-semantik')

        semantik.addEventListener('click', function() {
            semantik.classList.toggle('rotate-90')
            isisemantik.classList.toggle('hidden')
        })

        const sosial = document.getElementById('sosial')
        const isisosial = document.getElementById('isi-sosial')

        sosial.addEventListener('click', function() {
            sosial.classList.toggle('rotate-90')
            isisosial.classList.toggle('hidden')
        })

        // Modal
        const modal = document.getElementById('modal')
        const bukamodal = document.getElementById('buka-modal')
        const tutupmodal = document.getElementById('tutup-modal')

        bukamodal.addEventListener('click', function() {
            modal.classList.remove('hidden')
        })

        tutupmodal.addEventListener('click', function() {
            modal.classList.add('hidden')
        })
    </script>
    <!-- JAVASCRIPTS -->
</body>

</html>