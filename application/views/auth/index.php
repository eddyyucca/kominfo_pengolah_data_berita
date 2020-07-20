<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-7">

                <div class="card o-hidden border-0 shadow-lg my-5 ">
                    <div class="card-body p-0">

                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <?php if ($kesalahan == false) {
                                    } elseif ($kesalahan == true) {
                                        echo $kesalahan;
                                    } ?>
                                    <form method="POST" action="<?= base_url('auth/login_proses'); ?>">
                                        <fieldset class="form-group">
                                            <label class="form-label">Username</label>
                                            <input type="text" name="username" class="form-control" data-validation="[NOTEMPTY]">
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <label class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" data-validation="[NOTEMPTY]">
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <button type="submit" class="btn">Login</button>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>