<?php 
include("class/users.php");
$qus = new users;
$cat = $_POST['cat'];
$qus->ques_show($cat);
$_SESSION['cat']=$cat;
/*echo "<pre>";
print_r($qus->qus);*/
?>
<html>
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="css/materialize.min.css">
        <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="answer.php" method="post">
        <?php
        $i=1;
            foreach($qus->qus as $quest)
            {
        ?>
        <div id="quiz">
        <div class="container">
        <div class="row">
        <div class="col s12">
<table>
        <thead>
          <tr>
              <th class="card-panel green lighten-5"><?php echo $i.")"; ?><?php echo $quest['question'];?></th>
          </tr>
        </thead>
        <tbody>
            <?php if(isset($quest['ans1'])) { ?>
          <tr>
            <td><p>
                <label>
                  <input type="radio" value="0" name="<?php echo $quest['id']; ?>" />
                  <span><?php echo $quest['ans1'];?></span>
                </label>
              </p></td>
          </tr>
            <?php } ?>
            <?php if(isset($quest['ans2'])) { ?>
          <tr>
            <td><p>
                <label>
                  <input type="radio" value="1" name="<?php echo $quest['id']; ?>" />
                  <span><?php echo $quest['ans2'];?></span>
                </label>
              </p></td>
          </tr>
            <?php }?>
            <?php if(isset($quest['ans3'])) { ?>
          <tr>
            <td><p>
                <label>
                  <input type="radio" value="2" name="<?php echo $quest['id']; ?>" />
                  <span><?php echo $quest['ans3'];?></span>
                </label>
              </p></td>
          </tr>
            <?php }?>
            <?php if(isset($quest['ans4'])) { ?>
          <tr>
            <td><p>
                <label>
                  <input type="radio" value="3" name="<?php echo $quest['id']; ?>" />
                  <span><?php echo $quest['ans4'];?></span>
                </label>
              </p></td>
          </tr>
            <?php }?>
            <tr style="display:none">
            <td><p>
                <label>
                  <input type="radio" checked="checked" value="no_attempt" name="<?php echo $quest['id']; ?>" />
                  <span></span>
                </label>
              </p></td>
          </tr>
        </tbody>
      </table>
            </div>
            </div>
            </div>
            </div>
            <?php
            $i++;}
      ?>
       <center><a class="waves-effect waves-light btn" id="previous">Previous Question</a></center>
       <center><a class="waves-effect waves-light btn" id="next">Next Question</a></center>
      <center><button class="waves-effect waves-light btn">Submit Quiz</button></center>
            </form>
      <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="js/materialize.min.js"></script>
  <script src="js/main.js"></script>  
</body>
</html>