<?php include('header.php')?>
<h1>Login</h1>
<style>
.login-form{
    width: 500px;
    margin: 0 auto;
}
</style>
<form class="login-form" action="<?=base_url('submit-login')?>" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php include('footer.php')?>

