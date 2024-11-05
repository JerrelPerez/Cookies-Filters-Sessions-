<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
     <div class="container"></div>
      <div class="box form-box">
        <?php 
          
          include("config.php");
          if(isset($_POST['submit'])){
            $email = mysqli_real_escape_string($conn,$_POST['password']);
            $password = mysqli_real_escape_string($conn,$_POST['password']);

            $result = mysqli_query($conn,"SELECT * FROM users WHERE Email='$email' AND Password='$password' ") or die("Select Error");
            $row = mysqli_fetch_assoc($result);

            if(is_array($row) && !empty($row)){
              $_SESSION['valid'] = filter_var($row ['Email'], FILTER_SANITIZE_EMAIL);
              $_SESSION['username'] = filter_var($row ['Username'], FILTER_SANITIZE_STRING);
              $_SESSION['age'] = filter_var($row ['Age'], FILTER_SANITIZE_NUMBER_INT);
              $_SESSION['id'] = filter_var($row ['Id'], FILTER_SANITIZE_NUMBER_INT);

              setcookie("user_email", filter_var($row['Email'], FILTER_SANITIZE_EMAIL), time() + (86400 * 30), "/");
              setcookie("user_name", filter_var($row['Username'], FILTER_SANITIZE_STRING), time() + (86400 * 30), "/");

              if(isset($_SESSION['valid'])){
                header("Location: index.php");
              }
            } else {
              echo "<div class='message'>
                      <p>Wrong Username or Password</p>
                    </div> <br>";
              echo "<a href='index.php'><button class='btn'>Go Back</button></a>";
            }
          } else {

        ?>  
        <header>Login</header>
        <form action="" method="post">
          <div class="field input">
            <label for="email">email</label>
            <input type="text" name="email" id="email" required>
          </div>

          <div class="field input">
            <label for="password">password</label>
            <input type="password" name="password" id="password" required>
          </div>

          <div class="field">
            <input type="submit" class="btn" name="submit" value="Login" required>
          </div>

          <div class="links">
            Don't have acount? <a href="register.php">Sign Up Now</a>
            </div>

        </form>
        <?php } ?>
      </div>
</body>
</html>
