<?php
    include("class/users.php");
    $reg_email = $_SESSION['reg_email'];
    $profile = new users;
    $profile->users_profile($reg_email);
   // print_r($profile->data);
   if($_SESSION['reg_email']=="")
   {
	   header("Location:".$url);
   }
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,400,700&display=swap" rel="stylesheet"> 
</head>
<body class="main_page welcome_pg">


<div class="form_align">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-6 col-xs-12 form_right">
			<div class="form_block">
			    <div class="form">			
          <?php
            foreach($profile->data as $prof){

            ?>
					  <div class="input_data">
					        <h3>hi,  welcome  <?php echo $prof['name'];?> </h3>
					        
					        <div class="input_block dummy_image">
								<img src="img/<?php echo $prof['img'];?>" alt="">
			  </div>
			  <div class="logout">
			  <button type="submit"><a href = "logout.php">Sign Out</a></button>
			</div>
              <?php
            }
          ?>
							 <div class="input_block">
							 <textarea id="w3mission">Terms and conditions .The Intellectual Property disclosure will inform users that the contents, logo and other visual media you created is your property and is protected by copyright laws.
A Termination clause will inform that users' accounts on your website and mobile app or users' access to your website and mobile</textarea>
				 <div class="terms_check">
						<input type="checkbox" id="checkb" name="checkb" value="checkb" required>
						<label for="checkb" class="check_text"> I Understand the above stated terms and conditions </label>
				  </div>
							</div>

							<a href="paper_choice.php"><button type="submit">next</button></a>
					</div>
					  </div>
						</div>
			</div>
		</div>
	</div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script> 

</body>
</html>
