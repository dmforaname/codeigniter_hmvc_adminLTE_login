<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/login.css">
</head>

<body>
    <div id="particles-js">

       
    </div>
    <div class="loginbox">
        <form class="login" action="<?= base_url().'login/auth' ?>" method="post">
            <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
            <input type="hidden" name="url_redirect" value="<?php echo $this->session->flashdata('redirect') ?>" />
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter username" required>
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter password" required>
            <a href="Portfolio1.html"><input type="submit" name="login" value="Login"></a>
            <!--
            <a href="#">Forgot your password?</a><br>
            <a href="CreateACC.html">Create an account!</a>
            -->
        </form>
    </div>
<?php echo $this->session->flashdata('msg');?>
<script type="text/javascript" src="<?= base_url() ?>assets/js/particles.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/js/login.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/js/particles.min.js"></script>
</body>
</html>