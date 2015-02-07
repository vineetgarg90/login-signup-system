<div id='sign-up-contianer' style='width:500px;margin:auto'>
  <form ic-post-to="login.php" ic-always-update="true" ic-indicator="#login-loader">
    <h3>Login</h3>
    <?php if(isset($success_msg)){ ?>
        <span class="text-success"><?php echo $success_msg; ?></span>
    <?php } ?>
    <?php if(isset($error_msg)){ ?>
        <span class="text-danger"><?php echo $error_msg; ?></span>
    <?php } ?>        
    <div class="form-group">
      <label class="control-label">Email Address</label>
      <input class="form-control" name="email" >
    </div>
    <div class="form-group">
      <label>Password</label>
      <input type="password" class="form-control" name="password">
    </div>

    <button class="btn btn-default">Login <i id="login-loader" class="fa fa-spinner fa-spin" style="display:none;"></i></button>
  </form>
</div>
