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
<body class="main_page paper_choice">
<div class="form_align">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-6 col-xs-12 form_right">
			   <div class="form_block">
			   
               <form method="post" action="ques_show.php">
					     <div class="imgcontainer">
						<img src="images/aipl.png" alt="logo" class="logo">
					  </div>
                     <div class="input_block radio_options">	
                                <label>  Choose which paper you want to give, from below options ? </label> <br>							 
								<select id="PAPERS" name="cat">
                                <option value="" disabled selected>Select Category</option>
                                <?php
                    $profile->cat_show();
                  foreach($profile->cat as $category){
              ?>
                                <option value="<?php echo $category['id'];?>"><?php echo $category['cat_name'];?></option>
                  <?php } ?>
								</select>						
							</div>
							<button type="submit">Start quiz</button>
							
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
