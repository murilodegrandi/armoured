<?php
  require_once "classes/users.php";
  $u = new User();
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Armoured DevSec Project</title>
    <meta name="description" content="My Hacking Lab Project">
    <meta name="author" content="Murilo de Grandi">
    <link rel="stylesheet" href="css/style.css"> 
  </head>
  
  <body>
      <header id="top">
        <h1>Armoured DevSec Project</h1>
        <h2>Web Application Security Lab<h2>
      </header> 
      <nav id="menu">
        <ul type="none">
          <li><a href="index.php">Home</a></li>
          <li><a href="about.html">About</a></li>
        </ul>
      </nav>
      
  
      <div id="form-body">
        <h1>Login</h1>
        <form method="POST">
           <input type="email" placeholder="email" name="email"/>
           <input type="password" placeholder="password" name="password"/>
           <input type="submit" value="submit"/>
           <a href="signup.php">Not registered yet? Click here. </a>
        </form>
      </div>
<?php
if(isset($_POST['email']))
{
  $email = addslashes($_POST['email']);
  $password = addslashes($_POST['password']);
  //verify if not empty
  if(!empty($email) && !empty($password))
  {
      $u->connect("WebServer", "localhost", "root", "LejGy88cb1fn");
      if($u->msgError == "")
      {
          if($u->login($email,$password))
          {
              header("location: resources.php");
          }
          else
          {
            ?>
            <div class="msg-error" style="color: red;">
              Incorrect email or password!
            </div>
            <?php
          }
      }
      else
      {
            ?>
            <div class="msg-error">
                <?php echo "Error: ".$u->msgError; ?>
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
