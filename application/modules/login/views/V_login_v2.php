<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Kreazy Login</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="<?= base_url().'assets/css/login_v2.css' ?>">
</head>

<body>
    
      <div class="wrapper">
        <form class="login" action="<?= base_url().'login/auth' ?>" method="post">
          <p class="title">Administrator Log In</p>
          <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">   
          <input type="text" placeholder="Username" name="username" autofocus/>
          <i class="fa fa-user"></i>
          <input type="password" placeholder="Password" name="password" />
          <i class="fa fa-key"></i>
          <!--<a href="#">Forgot your password?</a>-->
          <input type="hidden" name="url_redirect" value="<?php echo $this->session->flashdata('redirect') ?>" />

          <button>
            <i class="spinner"></i>
            <span class="state">Log in</span>
          </button>
        </form>
          
            <footer><a target="blank" href="<?= base_url() ?>">dmc-indonesia.com</a></footer>
        
      </div>
         <?php echo $this->session->flashdata('msg');?>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
</body>
</html>
