<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  <title>Login</title>
  <style>
    body {
      background-color: #f8f9fa;
    }

    .login-container {
      max-width: 400px;
      margin: 0 auto;
      padding: 40px;
      margin-top: 100px;
      background-color: #fff;
      border-radius: 4px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .login-container h2 {
      text-align: center;
      margin-bottom: 30px;
    }
    .error {
  color: #F00;
  background-color: #FFF;
}
  </style>
</head>

<body>
  <div class="container">
    <div class="login-container">
      <h2>Login</h2>
                          <?php 
                            /*** section to print error message */
                          if(isset($_REQUEST['error']))
															{?>
														<div align="center"><?php print '<font color="#FF0000">Invalid User Name Or Password</font>'; ?></div>
														<?php } 
                             /*** end error message section  */
                            ?>
      <form method="POST" action="login.php" name="frmname">
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" class="form-control" name="username" id="username" placeholder="Enter your username" require>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" require>
        </div>
        <div class="d-grid gap-2">
          <button type="submit" class="btn btn-primary" onclick="frmvalid()">Login</button>
        </div>
      </form>
    </div>
  </div>
  <script src="assets/jquery-3.6.0.min.js"></script>
  <script src="assets/jquery.validate.min.js"></script>
  <script>
      function frmvalid() {
      
            $("form[name='frmname']").validate({

rules: {

  username: {
        required: true,
    },
    password: {
        required: true,
    },   
},
messages: {

  username: {
        required: "Username required",
    },
    password: {
        required: "Password required",
    },

},
submitHandler: function(form) {
    form.submit();
}
});

        }
  </script>
</body>

</html>
