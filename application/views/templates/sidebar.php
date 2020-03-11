<!-- Main Sidebar Container -->
<aside class="main-sidebar elevation-4 sidebar-light-info">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <i class="fas fa-database fa-fw fa-2x"></i>
        <span class="brand-text font-weight-light ml-2">App Desa </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url('assets/vendor/') ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= $user['nama'] ?></a>
            </div>
        </div>


        <?php

        //query menu 
        $role_id = $this->session->userdata('role_id');
        $this->db->select(' 
                            user_menu.menu,user_menu.icon,user_menu.id,user_access_menu.menu_id,user_access_menu.role_id
        ');
        $this->db->from('user_menu');
        $this->db->join('user_access_menu', 'user_access_menu.menu_id=user_menu.menu_id');
        $this->db->where('role_id', $role_id);
        $this->db->order_by('menu_id', 'ASC');
        $menuSidebar = $this->db->get()->result_array();




        ?>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent nav-flat" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                <?php foreach ($menuSidebar as $m) : ?>
                    <?php if ($m['menu'] == $menu) : ?>
                        <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link active">
                                <i class="<?= $m['icon'] ?>"></i>
                                <p>
                                    <?= $m['menu'] ?>
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                        <?php else : ?>
                        <li class="nav-item has-treeview ">
                            <a href="#" class="nav-link">
                                <i class="<?= $m['icon'] ?>"></i>
                                <p>
                                    <?= $m['menu'] ?>
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>

                        <?php endif ?>
                        <?php
                        // query submenu
                        $this->db->select('*');
                        $this->db->from('user_sub_menu');
                        $this->db->where('menu_id', $m['menu_id']);
                        $this->db->where('is_active', 1);
                        $submenu = $this->db->get()->result_array();
                        foreach ($submenu as $sm) :
                        ?>
                            <?php if ($sm['title'] == $title) : ?>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="<?= base_url($sm['url']) ?>" class="nav-link active">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p><?= $sm['title'] ?></p>
                                        </a>
                                    </li>
                                </ul>
                            <?php else : ?>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="<?= base_url($sm['url']) ?>" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p><?= $sm['title'] ?></p>
                                        </a>
                                    </li>
                                </ul>
                            <?php endif ?>
                        <?php endforeach ?>
                        </li>

                    <?php endforeach ?>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?= $title ?></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#"><?= $menu  ?></a></li>
                        <li class="breadcrumb-item active"><?= $title ?></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->