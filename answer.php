<?php
    include("class/users.php");
    $ans = new users;
    $answer = $ans->answer($_POST);
?>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="css/materialize.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <h1>Result</h1>
        <div class="container">
    <div class="collection">
    <a class="collection-item"><span class="new badge"><?php echo $answer['right']?></span>Right Answer</a>
    <a class="collection-item"><span class="new badge red"><?php echo $answer['wrong']?></span>Wrong Answer</a>
    <a class="collection-item"><span class="new badge blue"><?php echo $answer['no_answer']?></span>No Answer</a>
  </div>
</div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="js/materialize.min.js"></script>
  <script src="js/main.js"></script>  
    </body>
</html>