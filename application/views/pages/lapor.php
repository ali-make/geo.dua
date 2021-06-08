<div class="container-fluid">

    <div class="row p-sm-5">

        <div class="col-md-5">
            <?= form_open_multipart('posting/lapor'); ?>

            <div class="form-group row">
                <label for="title" class="col-sm-5">Title</label>
                <div class="col-sm-10">
                    <input type="text" name="title"  class="form-control" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="description" class="col-sm-5">Description</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="lat" class="col-sm-5">Latitude</label>
                <div class="col-sm-10">
                    <input type="float" name="lat" value="" class="form-control" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="lon" class="col-sm-5">Longitude</label>
                <div class="col-sm-10">
                    <input type="float" name="lon" value="" class="form-control" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="lon" class="col-sm-5">Upload gambar</label>
                <div class="col-sm-10">
                    <div class="custom-file">
                        <input type="file" id="image" name="image" class="custom-file-input" required>
                        <label for="image" class="custom-file-label">Pilih gambar</label>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-10 mt-3">
                    <button class="btn btn-primary btn-block" type="submit">Posting</button>
                </div>
            </div>

            </form>
            <?= form_close(); ?>
        </div>
    </div>

</div>