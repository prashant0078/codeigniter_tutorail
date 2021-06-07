    <?php include('header.php') ?>
    <?php if($this->session->has_userdata('user')) {?>
    <h1>Hello <?=$this->session->userdata('user')["name"]?></h1>
    <?php } else { ?>
    <h1>Hello User</h1>
    <?php } ?>
    <?php include('footer.php') ?>

  