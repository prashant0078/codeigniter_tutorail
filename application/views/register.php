<?php include('header.php')?>
<h1>Register</h1>
<style>
.login-form{
    width: 500px;
    margin: 0 auto;
}
</style>
<form class="login-form" action="<?=base_url('submit-register')?>" method="POST">
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="password">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <div class="form-group">
    <label for="cpassword">Confirm Password</label>
    <input type="password" class="form-control" id="cpassword" name="cpassword">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php include('footer.php')?>