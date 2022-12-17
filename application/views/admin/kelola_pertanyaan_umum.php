<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="<?= base_url('assets/'); ?>assets/" data-template="vertical-menu-template-free">

<head>
    <?php
    $data = [
        'title' => 'Kelola Pertanyaan Umum',
        'nav' => 'Pertanyaan Umum',
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
                                                        <th>Question (Q)</th>
                                                        <th>Answer (A)</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($pertanyaanUmum as $i => $value) { ?>
                                                        <tr>
                                                            <td><?= $i + 1; ?></td>
                                                            <td><?= $value->pertanyaan; ?></td>
                                                            <td><?= $value->jawaban; ?></td>
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
                                <label for="pertanyaan" class="form-label">Question (Q)</label>
                                <textarea class="form-control" name="pertanyaan" id="pertanyaan" rows="3" placeholder="Masukkan Question (Q)"></textarea>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="jawaban" class="form-label">Answer (A)</label>
                                <textarea class="form-control" name="jawaban" id="jawaban" rows="3" placeholder="Masukkan Answer (A)"></textarea>
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
                    Pertanyaan umum yang telah terhapus tidak dapat dikembalikan lagi.
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
            const url = base_url + 'CrudController/insert/pertanyaan_umum'
            $("#form").attr('action', url)
            $("#modal-title").html('Tambah Data Pertanyaan Umum')
            $("#btn-save").html('Tambah')

            $("#pertanyaan").val('')
            $("#jawaban").val('')

            $("#modal-form").modal('show')
        }

        function editData(id) {
            $.ajax({
                url: base_url + 'CrudController/getById/pertanyaan_umum/' + id,
                type: 'get',
                dataType: 'json',
                success: function(res) {
                    const url = base_url + 'CrudController/update/pertanyaan_umum/' + id
                    $("#form").attr('action', url)
                    $("#modal-title").html('Edit Data Pertanyaan Umum')
                    $("#btn-save").html('Simpan Perubahan')

                    $("#pertanyaan").val(res.pertanyaan)
                    $("#jawaban").val(res.jawaban)

                    $("#modal-form").modal('show')
                }
            })

        }

        function hapusData(id) {
            const url = base_url + 'CrudController/delete/pertanyaan_umum/' + id
            $("#btn-delete").attr('href', url)

            $("#modal-delete").modal('show')
        }
    </script>
</body>

</html>