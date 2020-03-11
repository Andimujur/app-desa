<div class="flashdata" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
<div class="login-box">
    <div class="login-logo">
        <div class="justify-content-center mb-2">
            <i class="fas fa-5x fa-database"></i>
        </div>
        <h2 class="font-weight-bold text-bolt">Aplikasi Desa</h2>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body shadow-lg">
            <p class="login-box-msg text-primary">Login </p>

            <form action="<?= base_url('auth') ?>" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="username" name="username" value="<?= set_value('username') ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>

                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password" name="password">


                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">

                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit swalDefaultSuccess" class="btn btn-primary btn-block" id="tombol">
                            Login
                            <span id="spinner"></span>
                        </button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->