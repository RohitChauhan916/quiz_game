<?php
    include("class/users.php");
    $reg_email = $_SESSION['reg_email'];
    $profile = new users;
    $profile->users_profile($reg_email);
   // print_r($profile->data);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Home Page
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="css/materialize.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    <header>
    <h2>Online Quiz</h2>
    </header>
    <section>
    <div class="container">
<div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a class="active" href="#test1">Home</a></li>
        <li class="tab col s3"><a href="#test2">Profile</a></li>
        <li class="tab col s3"><a href="#test3">Disabled Tab</a></li>
        <li class="tab col s3"><a href="#test4">Logout</a></li>
      </ul>
    </div>
    <div id="test1" class="col s12">
        <br>
    <center><button class="waves-effect waves-light btn" onclick="hid_item()">Start Quiz</button></center>
    <br>
    <form method="post" action="ques_show.php">
    <div id="select" style="display:none;">
    <select name="cat">
      <option value="" disabled selected>Select Category</option>
    <?php
        $profile->cat_show();
        foreach($profile->cat as $category){
    ?>
      <option value="<?php echo $category['id'];?>"><?php echo $category['cat_name'];?></option>
      <?php
        }
?>
    </select>
    <button value="submit" class="waves-effect waves-light btn">button</button>
      </form>
</div>
</div>

    </div>
    <div id="test2" class="col s12">
    <table>
        <thead>
          <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Image</th>
          </tr>
        </thead>

        <tbody>
            <?php
            foreach($profile->data as $prof){

            ?>
          <tr>
            <td><?php echo $prof['name'];?></td>
            <td><?php echo $prof['email'];?></td>
            <td><img src="img/<?php echo $prof['img'];?>" width="200px" height="200px"></td>
          </tr>
          <?php
            }
          ?>
        </tbody>
      </table>

    </div>
    <div id="test3" class="col s12">Test 3</div>
    <div id="test4" class="col s12">Test 4</div>
  </div>
  </div>
  </section>
  <footer>
  
  </footer>

  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="js/materialize.min.js"></script>
  <script src="js/main.js"></script>
  </body>
  </html>