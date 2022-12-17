<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="<?= base_url('assets/'); ?>assets/" data-template="vertical-menu-template-free">

<head>
    <?php
    $data = [
        'title' => 'Kelola Ide Baru',
        'nav' => 'Ide Baru',
        'sub_nav' => ''
    ];
    ?>
    <?php $this->load->view('layout_admin/head', $data); ?>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            <?php $this->load->view('layout_admin/sidebar', $data); ?>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                <?php $this->load->view('layout_admin/navbar', $data); ?>
                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-md-12 col-12 order-0 mb-4">
                                <div class="card h-100">
                                    <div class="card-header d-flex align-items-center justify-content-between pb-0">
                                        <div class="card-title mb-0">
                                            <h5 class="m-0 me-2"><?= $data['title']; ?></h5>
                                            <small class="text-muted"> Anda dapat menambah, mengubah, & menghapus data</small>
                                        </div>
                                    </div>
                                    <div class="card-body pt-4">
                                        <button class="btn btn-primary mb-4" onclick="tambahData()">Tambah</button>
                                        <div class="table-responsive text-nowrap">
                                            <table class="table" id="datatable">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Ide</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($ideBaru as $i => $value) { ?>
                                                        <tr>
                                                            <td><?= $i + 1; ?></td>
                                                            <td><?= $value->ide; ?></td>
                                                            <td>
                                                                <button onclick="editData(<?= $value->id; ?>)" class="btn btn-primary btn-icon">
                                                                    <i class="bx bx-edit"></i>
                                                                </button>
                                                                <button onclick="hapusData(<?= $value->id; ?>)" class="btn btn-danger btn-icon">
                                                                    <i class="bx bx-x"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    <?php $this->load->view('layout_admin/footer', $data); ?>
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Modal Form -->
    <div class="modal fade" id="modal-form" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="" method="POST" id="form">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-title">...</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <label for="ide" class="form-label">Ide</label>
                                <textarea class="form-control" name="ide" id="ide" rows="3" placeholder="Masukkan Ide"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Tutup
                        </button>
                        <button type="submit" class="btn btn-primary" id="btn-save">...</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Delete -->
    <div class="modal fade" id="modal-delete" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hapus Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Ide baru yang telah terhapus tidak dapat dikembalikan lagi.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Batal
                    </button>
                    <a href="" id="btn-delete" class="btn btn-danger">Hapus</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Core JS -->
    <?php $this->load->view('layout_admin/js', $data); ?>

    <script>
        const base_url = "<?= base_url(); ?>"

        function tambahData() {
            const url = base_url + 'CrudController/insert/ide_baru'
            $("#form").attr('action', url)
            $("#modal-title").html('Tambah Data Ide Baru')
            $("#btn-save").html('Tambah')

            $("#ide").val('')

            $("#modal-form").modal('show')
        }

        function editData(id) {
            $.ajax({
                url: base_url + 'CrudController/getById/ide_baru/' + id,
                type: 'get',
                dataType: 'json',
                success: function(res) {
                    const url = base_url + 'CrudController/update/ide_baru/' + id
                    $("#form").attr('action', url)
                    $("#modal-title").html('Edit Data Ide Baru')
                    $("#btn-save").html('Simpan Perubahan')

                    $("#ide").val(res.ide)

                    $("#modal-form").modal('show')
                }
            })

        }

        function hapusData(id) {
            const url = base_url + 'CrudController/delete/ide_baru/' + id
            $("#btn-delete").attr('href', url)

            $("#modal-delete").modal('show')
        }
    </script>
</body>

</html>