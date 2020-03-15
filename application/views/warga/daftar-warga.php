<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Daftar Warga</h3>

                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th class="text-capitalize">No.</th>
                                    <th class="text-capitalize">nik</th>
                                    <th class="text-capitalize">nama</th>
                                    <th class="text-capitalize">Alamat</th>
                                    <th class="text-capitalize">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach ($warga as $w) : ?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <td><?= $w['nik'] ?></td>
                                        <td><?= $w['nama'] ?></td>
                                        <td><?= $w['alamat'] ?></td>
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
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
    </div>
</section>