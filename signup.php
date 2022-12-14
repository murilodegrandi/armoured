<?php
  require_once "classes/users.php";
  $u = new User();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Armoured DevSec Project</title>
    <meta name="description" content="My Hacking Lab Project">
    <meta name="author" content="Murilo de Grandi">
    <link rel="stylesheet" href="css/style.css"> 
  </head>
  
  <body>
    <nav id="menu">
      <ul type="none">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.html">About</a></li>
      </ul>
    </nav>
    <div id="form-body">
      <h1>User Registration</h1>
      <form name="frmUser" method="post">
         <input type="text" name="name" placeholder="Full Name" maxlength="30"/>
         <input type="email" name="email" placeholder="Email" maxlength="40"/>
         <input type="password" name="password" placeholder="Password" maxlength="15"/>
         <input type="password" name="confPassword" placeholder="Confirm Password"/>
         <input type="submit" value="Sign up"/>
      </form>
    </div>
<?php
  //verify if user clicked on button
if (isset($_POST['name']))
{
  $name = addslashes($_POST['name']);
  $email = addslashes($_POST['email']);
  $password = addslashes($_POST['password']);
  $confPassword = addslashes($_POST['confPassword']);
  //verify if not empty
  if(!empty($name) && !empty($email) && !empty($password) && !empty($confPassword))
  {
    $u->connect("WebServer", "localhost", "root", "LejGy88cb1fn");
    if($u->msgError == "")
    {
      if($password == $confPassword)
      {
        if($u->signup($name, $email, $password))
        {
          ?>
          <div class="msg-success" style="color: green;">
            Sign up successful! Please sign in to start using the lab.
          </div>
          <?php
            header('Refresh: 3; URL = index.php');
        }
        else
        {
          ?>
          <div class="msg-error" style="color: red;">
          Email already exists!
          </div>
          <?php
        }
      }
      else
      {
        ?>
        <div class="msg-error">
        The passwords do not match!
        </div>
        <?php
      }
    }
    else
    {
      ?>
      <div class="msg-error">
        <?php echo "ERROR: ".$u->msgError; ?>
      </div>
      <?php
    }
  }else
  {
    ?>
    <div class="msg-error">
      Please fill out all the fields!
    </div>
    <?php
  }
}  
    
?>

  </body>
</html>