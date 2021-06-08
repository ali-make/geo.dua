<div class="container-fluid">

    <div class="row p-sm-5">

        <div class="col-md-5">
            <?= form_open_multipart('users/ubahProfile'); ?>
            <div class="form-group row">
                <label for="email" class="col-sm-5">Email address</label>
                <div class="col-sm-10">
                    <input type="text" name="email" value="<?= $profile['email']; ?>" class="form-control" readonly>
                </div>
            </div>

            <div class="form-group row">
                <label for="username" class="col-sm-5">Username</label>
                <div class="col-sm-10">
                    <input type="text" name="username" value="<?= $profile['username']; ?>" class="form-control" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="image" class="col-sm-5">Image</label>
                <div class="col-sm-10">
                    <div class="col-sm-10">
                        <img src="<?= base_url('assets/img/') . $profile['img']; ?>" alt="" class="img-thumbnail">
                    </div>
                    <div class="col-sm-10 py-3">
                        <div class="custom-file">
                            <input type="file" id="image" name="image" class="custom-file-input">
                            <label for="image" class="custom-file-label">Pilih gambar</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-10">
                    <button class="btn btn-primary btn-block" type="submit">Simpan</button>
                </div>
            </div>

            </form>
            <?= form_close(); ?>
        </div>
    </div>

</div>