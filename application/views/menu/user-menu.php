<section class="content">

    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
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
                                    <th>Menu Id</th>
                                    <th>Menu</th>
                                    <th>Icon</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach ($data as $d) : ?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <td hidden><?= $d['id'] ?></td>
                                        <td><?= $d['menu_id'] ?></td>
                                        <td><?= $d['menu'] ?></td>
                                        <td><?= $d['icon'] ?></td>
                                        <td>
                                            <a href="" class="badge badge-success"> <i class="fas fa-fw fa-edit"></i> Edit</a>
                                            <a href="<?= base_url('Menu/deleteMenu/') ?><?= $d['id'] ?> " class=" badge badge-danger"> <i class="fas fa-fw fa-trash-alt"></i> hapus</a>
                                        </td>
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