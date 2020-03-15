<section class="content">
    <div class="flashdata" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="col-sm-2 mb-2">
                    <a href="" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">Tambah layanan</a>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Daftar Warga</h3>
                        <div class="card-tools">
                            <form action="<?= base_url('Warga/index') ?>" method="POST">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="keyword" class="form-control float-right" placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th class="text-capitalize">No.</th>
                                    <th class="text-capitalize">Layanan</th>
                                    <th class="text-capitalize">action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 0;
                                foreach ($layanan as $w) : $i++ ?>

                                    <tr>
                                        <td><?= $i ?></td>
                                        <td><?= $w['layanan'] ?></td>
                                        <td>
                                            <a href="#">
                                                <i class="fas fa-edit fa-fw"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fas fa-trash fa-fw"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-right">
                            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                        </ul>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
    </div>
</section>
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Layanan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('Layanan/tambahLayanan') ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="layanan" placeholder="Masukkan Layanan" name="layanan">
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batalkan</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->