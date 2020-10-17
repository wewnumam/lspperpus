<div class="container">
    <div class="row mt-5">
        <div class="col-md-4">
            <div class="card">
                <h3 class="text-center mt-3 font-weight-bold">Masuk</h3>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input name="username" type="text" class="form-control" id="username"
                                aria-describedby="emailHelp" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input name="password" type="password" class="form-control" id="password"
                                placeholder="Password">
                        </div>
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <h3 class="text-center mt-3 font-weight-bold">Daftar</h3>
                <div class="card-body">
                    <?php Flasher::flash(); ?>
                    <form action="<?= BASEURL ?>/pengguna/daftar" method="POST">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input name="username" type="text" class="form-control" id="username"
                                aria-describedby="emailHelp" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input name="password" type="password" class="form-control" id="password"
                                placeholder="Password">
                        </div>
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>