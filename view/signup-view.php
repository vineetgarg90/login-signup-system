<div id='sign-up-contianer' style='width:500px;margin:auto'>
  <form ic-post-to="signup.php" ic-always-update="true" ic-indicator="#signup-loader">
    
    <h3>Sign up</h3>
    <?php if(isset($success_msg)){ ?>
        <span class="text-success"><?php echo $success_msg; ?></span>
    <?php } ?>
    <?php if(isset($error_msg)){ ?>
        <span class="text-danger"><?php echo $error_msg; ?></span>
    <?php } ?>    
    <div class="form-group">
      <label class="control-label">Email Address <i id="email-ind" class="fa fa-spinner fa-spin" style="display:none"></i> </label>
      <input class="form-control" name="email" value="<?php echo isset($email) ? $email : ''; ?>" >
      <?php if(isset($email_error)){ ?>
        <span class="text-danger"><?php echo $email_error; ?></span>
      <?php } ?>
    </div>
    <div class="form-group">
      <label>Name</label>
      <input type="text" class="form-control" name="name" value="<?php echo isset($name) ? $name : ''; ?>" >
      <?php if(isset($name_error)){ ?>
        <span class="text-danger"><?php echo $name_error; ?></span>
      <?php } ?>
    </div>
    <div class="form-group">
      <label>Password</label>
      <input type="password" class="form-control" name="password">
      <?php if(isset($password_error)){ ?>
        <span class="text-danger"><?php echo $password_error; ?></span>
      <?php } ?>
    </div>
    <div class="form-group">
      <label>Confirm Password</label>
      <input type="password" class="form-control" name="confirmPassword">
      <?php if(isset($confirm_error)){ ?>
        <span class="text-danger"><?php echo $confirm_error; ?></span>
      <?php } ?>      
    </div>

    <button class="btn btn-default">Submit  <i id="signup-loader" class="fa fa-spinner fa-spin" style="display:none;"></i></button>

  </form>
</div>
