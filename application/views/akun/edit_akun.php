<div class="page-content">
    <div class="container-fluid">
        <div class="box-typical box-typical-padding">
            <h3>Edit Akun</h3>
            <hr>
            <form action="<?= base_url('akun/proses_edit/') . $data->id ?>" method="post">
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label">Username</label>
                    <div class="col-sm-10">
                        <p class="form-control-static"><input type="text" class="form-control" name="username" value="<?= $data->username ?>"></p>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 form-control-label">Password</label>
                    <div class="col-sm-10">
                        <p class="form-control-static"><input type="password" class="form-control" name="password" placeholder="Password"></p>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="exampleSelect" class="col-sm-2 form-control-label">Level Akun</label>
                    <div class="col-sm-10">
                        <select id="exampleSelect" class="form-control" name="level">
                            <option value="">-- PILIH --</option>
                            <option value="Admin" <?= "Admin" ==  $data->level  ? 'selected=selected' : ''; ?>>Admin</option>
                            <option value="User" <?= "User" ==  $data->level  ? 'selected=selected' : ''; ?>>User</option>
                        </select>
                    </div>
                </div>


                <button class="btn btn-primary" type="submit">simpan</button>
            </form>
        </div>
    </div>
</div>