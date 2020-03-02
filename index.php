<!DOCTYPE html>
<html>
    <head>
        <title>
            Login Page
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="css/materialize.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
       <header> 
  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Online Quiz</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">JavaScript</a></li>
      </ul>
    </div>
  </nav>
</header>
<div class="container">
        <div class="row">
            <div class="col s6">
            <div class="row sign_in">
                <form action="signin.php" method="POST">
                    <?php
                        if(isset($_GET['run']) && $_GET['run']=="failed"){
                            echo "<mark>your email or password is incorrect</mark>";
                        }
                    ?>
                        <div class="input-field col s12" <?php if (isset($email_error)): ?>  <?php endif ?>>
                        <input id="login_email" type="email" name="reg_email" class="validate">
                        <label for="email">Email</label>
                        <?php if (isset($email_error)): ?>
      	<span><?php echo $email_error; ?></span>
      <?php endif ?>
                        </div>

                        <div class="input-field col s12">
                        <input id="login_password" type="password" name="reg_pass" class="validate">
                        <label for="login_password">Password</label>
                        </div>

                        <div class="col s12">
                            <div class="btn_submit">
                                <button class="waves-effect waves-light btn">SignIn</button>
                            </div>
                        
                </form>
                </div>
            </div>
        </div>
            <div class="col s6">
            <div class="row sign_in">
            <?php 
                    if(isset($_GET['run']) && $_GET['run']=="success"){
                        echo "<mark>Successfully Registration</mark>";
                    }
                ?>
                <form method="POST" action="signup.php" enctype="multipart/form-data">
                    <div class="input-field col s12">
                        <input id="reg_name" name="reg_name" type="text" class="validate">
                        <label for="Name">User Name</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="reg_email" name="reg_email" type="email" class="validate">
                        <label for="reg_email">Email</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="reg_password" name="reg_pass" type="password" class="validate">
                        <label for="reg_password">Password</label>
                    </div>
                    <div class="file-field input-field col s12">
                    <div class="btn">
                    <span>Image</span>
                    <input type="file" name="reg_img">
                    </div>
                    <div class="file-path-wrapper">
                    <input class="file-path validate" name="reg_img" type="text">
                    </div>
                    </div>
                    <div class="col s12">
                            <div class="btn_submit">
                                <button class="waves-effect waves-light btn">Signup</button>
                            </div>
                        </div>
                
                </form>
                </div>
            </div>
        </div>
</div>
        <script src="js/materialize.min.js"></script>
    </body>
</html>