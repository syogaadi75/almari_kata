<!-- Start Navbar -->
<nav id="topnav" class="defaultscroll is-sticky lg:bg-white dark:bg-slate-900">
    <div class="container flex justify-between">
        <!-- Logo container-->
        <a class="logo pl-0" href="<?= base_url(); ?>">
            <img src="<?= base_url(); ?>landing-assets/images/logo.png" class="inline-block dark:hidden w-32" alt="Logo">
            <img src="<?= base_url(); ?>landing-assets/images/logo.png" class="hidden dark:inline-block w-32" alt="Logo">
        </a>

        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu items-center">
                <?php if ($title != 'Laman Utama') { ?>
                    <li><a href="javascript:;" class="sub-menu-item">-</a></li>
                <?php } ?>
                <li class="<?php if ($title == 'Laman Utama') echo 'active'; ?>"><a href="<?= base_url(); ?>" class="sub-menu-item">Laman Utama</a></li>
                <li class="<?php if ($title == 'Lis Kata') echo 'active'; ?>"><a href="<?= base_url('lis-kata'); ?>" class="sub-menu-item">Lis Kata</a></li>
                <li class="<?php if ($title == 'Tentang') echo 'active'; ?>"><a href="<?= base_url('tentang'); ?>" class="sub-menu-item">Tentang</a></li>
                <li class="<?php if ($title == 'Pertanyaan Umum') echo 'active'; ?>"><a href="<?= base_url('pertanyaan-umum'); ?>" class="sub-menu-item">Pertanyaan Umum</a></li>
                <li class="<?php if ($title == 'Ide Baru') echo 'active'; ?>"><a href="<?= base_url('ide-baru'); ?>" class="sub-menu-item">Ada Ide Baru?</a></li>
                <li class="flex items-center">
                    <a href="<?= base_url('login'); ?>">
                        Login
                    </a>
                    <a href="javascript:;" class="sub-menu-item">
                        <span class="relative inline-block ">
                            <input type="checkbox" class="checkbox opacity-0 absolute" id="chk" />
                            <label class="label bg-slate-900 dark:bg-white shadow dark:shadow-gray-800 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8" for="chk">
                                <i class="uil uil-moon text-[20px] text-yellow-500"></i>
                                <i class="uil uil-sun text-[20px] text-yellow-500"></i>
                                <span class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] left-[2px] w-7 h-7"></span>
                            </label>
                        </span>
                    </a>
                </li>
            </ul>
            <!--end navigation menu-->
        </div>
        <!--end navigation-->
    </div>
    <?php if ($title != 'Laman Utama') { ?>
        <div class="container pb-2 lg:hidden">
            <form action="<?= base_url('detail-kata') ?>" method="POST" class="flex gap-4 justify-between -mt-3">
                <div class="relative flex justify-center items-center gap-2">
                    <input name="kata" type="text" class="text-black px-3 py-2 outline-none border border-gray-300 rounded w-[250px]" placeholder="Masukkan kata">
                    <i class="absolute uil uil-search text-[18px] right-2 top-2 z-10 text-black"></i>
                </div>
                <button class="btn text-white rounded-md bg-primary">Cari</button>
            </form>
        </div>
    <?php } ?>
    <!--end container-->
</nav>
<!--end header-->
<!-- End Navbar -->