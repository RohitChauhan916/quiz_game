<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,400,700&display=swap" rel="stylesheet"> 
</head>
<body>


<div class="form_align">
	<div class="container">
		<div class="row">
			<div class="col-md-5  col-sm-6 col-xs-12 form_div">
            <?php 
                    if(isset($_GET['run']) && $_GET['run']=="success"){
                        echo "<mark>Successfully Registration</mark>";
                    }
                ?>
             <?php 
                    if(isset($_GET['run']) && $_GET['run']=="allreadyexists"){
                        echo "<mark>email allready exists</mark>";
                    }
                ?>
				<form action="signup.php" method="post" enctype="multipart/form-data">
					  <div class="imgcontainer">
						<img src="images/aipl.png" alt="logo" class="logo">
					  </div>

					  <div class="input_data">
					        <h2>signup form </h2>
					        
					        <div class="input_block">
								<input type="text" placeholder="Enter Username" name="reg_name" required class="user_input">
							</div>
							
							<div class="input_block">
								<input type="text" placeholder="Enter Email" name="reg_email" required class="email_input">
							</div>
							
							<div class="input_block">
								<input type="password" placeholder="Enter Password" name="reg_pass" required class="password_input">
							</div>

							<div class="input_block">
							    <label> Upload image  </label>
								<input type="file" id="myFile" name="reg_img">
							</div>

							
							<button type="submit">Signup</button>
							
						</div>
					  
					
				</form>
			</div>
		</div>
	</div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script> 

</body>
</html>
