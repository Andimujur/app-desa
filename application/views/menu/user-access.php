<section class="content">

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><?= $title ?></h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Role Id</th>
                                    <th>Menu Id</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach ($data as $d) : ?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <?php if ($d['role_id'] == 1) : ?>
                                            <td> <span class="badge bg-primary">Admin</span> </td>
                                        <?php else : ?>
                                            <td> <span class="badge bg-warning">Pegawai</span> </td>
                                        <?php endif ?>
                                        <td><?= $d['menu']  ?></td>
                                    </tr>
                                    <?php $i++ ?>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>

</section>