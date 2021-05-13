<div class="form-signin vh-100">
    <?php echo form_open('users/signup'); ?>
    <div class="text-center mb-4">
        <h3 class="mb-3 font-weight-normal"><?php echo $title; ?></h3>
    </div>

    <div class="form-label-group">
        <input type="username" class="form-control" placeholder="Username" name="username" required autofocus>
        <label for="inputUsername">Username</label>
    </div>

    <div class="form-label-group">
        <input type="email" class="form-control" placeholder="Email address" name="email" required autofocus>
        <label for="inputEmail">Email address</label>
    </div>

    <div class="form-label-group">
        <input type="password" class="form-control" placeholder="Password" name="password" required>
        <label for="inputPassword">Password</label>
    </div>

    <div class="form-label-group">
        <input type="password" class="form-control" placeholder="Confirm Password" name="password1" required>
        <label for="inputPasswordAgain">Confirm Password</label>
    </div>

    <button class="btn btn-lg btn-primary btn-block pt-3" type="submit">Sign up</button>
    </form>
    <?php echo form_close(); ?>
</div>