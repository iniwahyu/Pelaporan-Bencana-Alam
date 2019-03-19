<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo SITE_NAME; ?></title>
    <?php $this->load->view('Home/include/css'); ?>
</head>
<body>

<div class="auth">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col">
                <div class="auth-body">
                    <div class="auth-title">
                        <h2 class="text-center">Sosial Bencana</h2>
                    </div>
                    <div class="auth-register">
                        <?php echo form_open('auth/proseslogin'); ?>
                            <div class="form-group">
                                <!-- <label>Email address</label> -->
                                <input type="email" name="email" class="form-control <?php echo form_error('email') ? 'is-invalid' : '' ?>" placeholder="Email Address" value="<?php echo set_value('email'); ?>">
                                <?php echo form_error('email', '<p class="text-white">', '</p>'); ?>
                            </div>
                            <div class="form-group">
                                <!-- <label>Password</label> -->
                                <input type="password" name="password" class="form-control <?php echo form_error('password') ? 'is-invalid' : '' ?>" placeholder="Password">
                                <?php echo form_error('password', '<p class="text-white">', '</p>'); ?>
                            </div>
                            <button type="submit" class="btn form-control auth-btn">Login</button>
                        <?php echo form_close(); ?>
                    </div>
                    <div class="auth-footer">
                        <p><a href="<?php echo base_url('register'); ?>" class="mr-auto">Create Account</a> <a href="" class="ml-auto">Lupa Password</a> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JAVASCRIPT -->
<?php $this->load->view('Home/include/js'); ?>
<!-- JAVASCRIPT -->
</body>
</html>