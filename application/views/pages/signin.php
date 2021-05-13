<div class="form-signin vh-100">
    <?php echo form_open('users/singin'); ?>
    <div class="text-center mb-4">
        <h3 class="mb-3 font-weight-normal"><?php echo $title; ?></h3>
    </div>

    <div class="form-label-group">
        <input type="email" class="form-control" placeholder="Email address" name="email" required autofocus>
        <label for="inputEmail">Email address</label>
    </div>

    <div class="form-label-group">
        <input type="password" class="form-control" placeholder="Password" name="password" required>
        <label for="inputPassword">Password</label>
    </div>

    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>
    <?php echo form_close(); ?>
</div>