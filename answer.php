<?php
    include("class/users.php");
    $ans = new users;
    $answer = $ans->answer($_POST);
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
<body>


<div class="form_align">
	<div class="container">
		<button type="submit" value="submit" class="btn_prv" name="submit">logout</button>
		<div class="row">
			<div class="col-md-5  col-sm-6 col-xs-12 form_div res_data">
		
				<form action="index.html" method="post">
					  <div class="imgcontainer">
						<img src="images/aipl.png" alt="logo" class="logo">
					  </div>

					  <div class="input_data">
					        <h2> Result Declaration Form </h2>
					        
					        <div class="input_block">
							    <label> Right Answers   </label>
								<input type="text" name="uname" value="<?php echo $answer['right']?>">
							</div>
							
							<div class="input_block">
							    <label> Wrong Answers   </label>
											<input type="text"  name="uname" value="<?php echo $answer['wrong']?>">
							</div>
							
							<div class="input_block">
							    <label> No Answers   </label>
										<input type="text"  name="uname" value="<?php echo $answer['no_answer']?>">
							</div>
							
							<div class="input_block">
							    <label>Your Result Score Is...  </label>
									<input type="text"  name="uname" >
							</div>
						
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
