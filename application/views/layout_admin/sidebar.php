<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="<?= base_url() ?>" class="app-brand-link">
            <img width="135" src="<?= base_url(); ?>landing-assets/images/logo.png" alt="Logo">
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <li class="menu-item <?php if ($nav == 'Data Kata') {
                                    echo "active";
                                } ?>">
            <a href="<?= base_url('data-kata') ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-book"></i>
                <div data-i18n="Analytics">Data Kata</div>
            </a>
        </li>
        <li class="menu-item <?php if ($nav == 'Pertanyaan Umum') {
                                    echo "active";
                                } ?>">
            <a href="<?= base_url('kelola-pertanyaan-umum') ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-list-minus"></i>
                <div data-i18n="Analytics">Pertanyaan Umum</div>
            </a>
        </li>
        <li class="menu-item <?php if ($nav == 'Ide Baru') {
                                    echo "active";
                                } ?>">
            <a href="<?= base_url('kelola-ide-baru') ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-extension"></i>
                <div data-i18n="Analytics">Ide Baru</div>
            </a>
        </li>
    </ul>
</aside>