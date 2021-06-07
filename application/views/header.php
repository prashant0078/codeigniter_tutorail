<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url("assets/css/bootstrap.min.css")?>" >
    <link rel="stylesheet" href="<?=base_url("assets/css/style.css")?>" >
  </head>
  <body>
  <ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" href="<?=base_url('home')?>">Home</a>
  </li>
  <?php if($this->session->has_userdata('user')) {?>
    <li class="nav-item">
    <a class="nav-link" href="<?=base_url('logout')?>">Logout</a>
  </li>
  <?php }else {?>
  <li class="nav-item">
    <a class="nav-link active" href="<?=base_url('login')?>">Login</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?=base_url('register')?>">Register</a>
  </li>
  <?php } ?>
  
</ul>