<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">

<head>
    <?php
    $data = [
        'title' => 'Pertanyaan Umum'
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
            <?php foreach ($pertanyaanUmum as $key => $value) { ?>
                <table class="mb-4">
                    <tr class="font-semibold">
                        <td>Q: </td>
                        <td class="pl-[10px]"><?= $value->pertanyaan; ?></td>
                    </tr>
                    <tr class="text-gray-500">
                        <td>A: </td>
                        <td class="pl-[10px]"><?= $value->jawaban; ?></td>
                    </tr>
                </table>
            <?php } ?>
            <!--end grid-->

            <!-- Lis kata mobile -->
        </div>
        <!--end container-->
    </section>
    <!-- End Hero -->

    <?php $this->load->view('layout_landing/script', $data); ?>
    <!-- JAVASCRIPTS -->
</body>

</html>