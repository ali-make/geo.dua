<!-- Flash messages -->

<div class="container mt-3">
    <?php if ($this->session->flashdata('info')): ?>
    <?php echo '<div class="alert alert-info">'.$this->session->flashdata('info').'<button class="close" type="button" data-dismiss="alert">x</button></div>'; ?>
    <?php endif; ?>
</div>

<div class="container mt-3">
    <?php if ($this->session->flashdata('user_loggedin')): ?>
    <?php echo '<div class="alert alert-success">'.$this->session->flashdata('user_loggedin').'<button class="close" type="button" data-dismiss="alert">x</button></div>'; ?>
    <?php endif; ?>
</div>

<div class="container mt-3">
    <?php if ($this->session->flashdata('login_failed')): ?>
    <?php echo '<div class="alert alert-danger">'.$this->session->flashdata('login_failed').'<button class="close" type="button" data-dismiss="alert">x</button></div>'; ?>
    <?php endif; ?>
</div>

<div class="container mt-3">
    <?php if ($this->session->flashdata('user_loggedout')): ?>
    <?php echo '<div class="alert alert-warning">'.$this->session->flashdata('user_loggedout').'<button class="close" type="button" data-dismiss="alert">x</button></div>'; ?>
    <?php endif; ?>
</div>

<div class="container mt-3">
    <?php if ($this->session->flashdata('success-foto')): ?>
    <?php echo '<div class="alert alert-success">'.$this->session->flashdata('success-foto').'<button class="close" type="button" data-dismiss="alert">x</button></div>'; ?>
    <?php endif; ?>
</div>

<div class="container mt-3">
    <?php if ($this->session->flashdata('email_exists')): ?>
    <?php echo '<div class="alert alert-danger">'.$this->session->flashdata('email_exists').'<button class="close" type="button" data-dismiss="alert">x</button></div>'; ?>
    <?php endif; ?>
</div>

<div class="container mt-3">
    <?= validation_errors('<div class="alert alert-danger">', '<button class="close" type="button" data-dismiss="alert">x</button></div>'); ?>
</div>