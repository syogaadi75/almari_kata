<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">

<head>
    <?php
    $data = [
        'title' => 'Tentang'
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
            <p class="pl-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum sequi molestias, suscipit, at ullam harum eligendi ipsum quos magni facere veniam minima error! Provident temporibus quisquam accusantium, atque nesciunt minima! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi, fugit suscipit enim ea modi at recusandae consectetur cumque quia illum incidunt amet. Veritatis iste neque, tempore at facilis eius cumque.</p>
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