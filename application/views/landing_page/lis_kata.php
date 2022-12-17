<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">

<head>
    <?php
    $data = [
        'title' => 'Lis Kata'
    ];
    ?>

    <?php $this->load->view('layout_landing/head', $data); ?>
</head>

<body class="font-nunito text-base text-black dark:text-white dark:bg-slate-900">

    <?php $this->load->view('layout_landing/navbar', $data); ?>

    <!-- Start Hero -->
    <section class="relative items-center relative">
        <div class="container z-2 mt-32">
            <h4 class="text-xl lg:text-3xl font-bold tracking-wide mb-4 lg:mb-8"><?= $data['title']; ?></h4>
            <p class="mb-4 text-gray-500">Karena terbatasnya ujaran baru yang terkumpul, kamu hanya bisa mencari kata-kata dengan gulir di bawah ini.</p>

            <div class="max-h-[350px] overflow-auto">
                <?php foreach ($kata as $i => $value) { ?>
                    <div class="font-semibold tracking-wide py-1 cursor-pointer hover:pl-2 hover:bg-gray-200 transition-all ease-linear duration-200" onclick="detail(<?= $value->id; ?>)">
                        <i class="uil uil-minus"></i>
                        <?= $value->kata; ?>
                    </div>
                <?php } ?>
            </div>
            <!--end grid-->

            <!-- Lis kata mobile -->
        </div>
        <!--end container-->
    </section>
    <!-- End Hero -->

    <?php $this->load->view('layout_landing/script', $data); ?>
    <script>
        const base_url = "<?= base_url(); ?>"

        function detail(id) {
            window.location.href = base_url + 'detail-kata/' + id
        }
    </script>
    <!-- JAVASCRIPTS -->
</body>

</html>