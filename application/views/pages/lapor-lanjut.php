<div class="container-fluid vh-100">

    <div class="row p-sm-5">

        <div class="col-md-5">

            <div class="form-group row">
                <label for="title" class="col-sm-5">Title</label>
                <div class="col-sm-10">
                    <input type="text" name="title" value="Title" class="form-control" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="description" class="col-sm-5">Description</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                </div>
            </div>
            
            <?php foreach ($location as $l) { ?>
            <div class="form-group row">
                <label for="lat" class="col-sm-5">Latitude</label>
                <div class="col-sm-10">
                    <input type="float" name="lat" value="<?= $l['lat']; ?>" class="form-control" readonly>
                </div>
            </div>

            <div class="form-group row">
                <label for="lon" class="col-sm-5">Longitude</label>
                <div class="col-sm-10">
                    <input type="float" name="lon" value="<?= $l['lon']; ?>" class="form-control" readonly>
                </div>
            </div>
            <?php } ?>
            
        </div>
    </div>
</div>