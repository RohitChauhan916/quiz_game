<?php 
include("class/users.php");
$qus = new users;
$reg_email = $_SESSION['reg_email'];
$profile =new users;
$profile->users_profile($reg_email);
$cat = $_POST['cat'];
$qus->ques_show($cat);
$_SESSION['cat']=$cat;
/*echo "<pre>";
print_r($qus->qus);*/
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
  <script type="text/javascript">
    function timeout() {
      var minute = Math.floor(timeLeft/60);
	  var second = timeLeft%60;
	  if(timeLeft <= 0){
		  clearTimeout(tm);
		  document.createElement('form').submit.call(document.getElementById('form1'));
	  }
	  else{
		document.getElementById("time").innerHTML = minute + " : " + second; 
	  }
	  timeLeft--;
	  var tm = setTimeout(function() { timeout() },1000);
    }
  </script>
</head>
<body class="main_page login_pg paper" onload="timeout()">
	

<div class="form_align">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-6 col-xs-12 form_right paper_div">
			<div class="form_block">
			     <div class="header_top">
				    <div class="head_brand">
                        <img src="images/aipl.png" alt="logo">  
					</div>
            <script type="text/javascript">
              var timeLeft=1*60;
            </script>
					<div class="timer_set">
                        <h3 id="time">timeout</h3>
                    </div>					 
				 </div>
			    <div class="paper_block">				       
				         <form action="answer.php" id="form1" method="post">
                 <?php
				  $i=1;
				  $questcount = 0;
				   foreach($qus->qus as $quest)
				   $questcount++;
                  {
                  ?>
        <div class="questions">
         <h4><?php echo $i.")"; ?><?php echo $quest['question'];?></h4>
							<div class="options_block">
              <?php if(isset($quest['ans1'])) { ?>
							    <p>
									<label>
										<input name="<?php echo $quest['id']; ?>" type="radio" value="0" />
										<span><?php echo $quest['ans1'];?></span>
									</label>
								</p>
                <?php } ?>
            <?php if(isset($quest['ans2'])) { ?>
								<p>
									<label>
										<input name="<?php echo $quest['id']; ?>" type="radio" value="1" />
										<span><?php echo $quest['ans2'];?></span>
									</label>
								</p>
                <?php }?>
            <?php if(isset($quest['ans3'])) { ?>      
								 <p>
									<label>
										<input name="<?php echo $quest['id']; ?>" type="radio" value="2" />
										<span><?php echo $quest['ans3'];?></span>
									</label>
								</p>
								<?php }?>
            <?php if(isset($quest['ans4'])) { ?>
								<p>
									<label>
										<input name="<?php echo $quest['id']; ?>" type="radio" value="3" />
										<span><?php echo $quest['ans4'];?></span>
									</label>
								</p>
                <?php }?>
                <p style="display:none">
									<label>
										<input name="<?php echo $quest['id']; ?>" type="radio" value="no_attempt" checked="checked"/>
										<span><?php echo $quest['ans4'];?></span>
									</label>
								</p>
							</div>
            </div>
							<?php
            $i++;}
      ?>
						 
                        					 
               </div>   

                 <div class="online_button">
		  <input type="button" value="Next" class="waves-effect waves-light btn" id="next">
		  <?php $view = (empty($quest))?"disabled":" ";?>
          <button type="submit" value="submit" class="waves-effect waves-light btn" {$view} name="submit">submit</button>    	
                </div>
				</form>  			   
			</div>
		</div>
	</div>
			</div>
</div>
<script>
    $(document).ready(function () {
        $('div.questions').find('input:radio').prop('checked', false);
    });
</script>
<script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
<script src="js/quiz.js"></script> 

</body>
</html>
