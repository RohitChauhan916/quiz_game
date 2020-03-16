<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,400,700&display=swap" rel="stylesheet"> 
</head>
<body class="main_page login_pg">
<div class="form_align">
	<div class="container">
		<div class="row">
		<div class="col-md-4 col-sm-6 col-xs-12 form_right">
		<div class="form_block">
				<form action="signin.php" method="post">
					  <div class="imgcontainer">
						<img src="images/aipl.png" alt="logo" class="logo">
					  </div>

					  <div class="input_data">
                            <?php
                        if(isset($_GET['run']) && $_GET['run']=="failed"){
                            echo "<mark>your email or password is incorrect</mark>";
                        }
					?>
							<div class="in_data">
					        <div class="input_block">
							<label>email</label>
                                <input type="text" placeholder="Enter Email" name="reg_email" required class="email_input">
                                <?php if (isset($email_error)): ?>
      	                        <span><?php echo $email_error; ?></span>
                                <?php endif ?>
							</div>

							<div class="input_block">
							<label> password</label>
								<input type="password" placeholder="Enter Password" name="reg_pass" required class="password_input">
							</div>

								</div>
							<button type="submit">Login</button>
							
						</div>
					  

					    <p class="sign_up"> Don't have an account .  <a href="Sign-up.php" target="_blank"> Sign up  </a></p>
					
				</form>
								</div>
			</div>
		</div>
	</div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script> 

</body>
</html>
