<?php
  include("session.php");
  include("connect.php");
?>

<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <!-- add icon link -->
  <link rel = "icon" href = 
  "https://img.freepik.com/free-vector/music-design-yellow-illustration_24877-49373.jpg?auto=format&h=200" 
          type = "image/x-icon">
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/login.css" />
  </head>
  <body>
    <nav>
      <ul>
        <li><a href="register.html">Register</a></li>
        <li><a href="login.html">Login</a></li>
        <li><a href="../index.html">Home</a></li>
      </ul>
    </nav>
    <div class="login-box">
      <a href="/"></a>
      <h2>Login</h2>
      <form name="form_login" method="POST" action="login.php">
        <div class="user-box">
          <input 
            id="username"
            type="text"
            name="username"
            placeholder="Username"
            required=""
          />
        </div>
        <div class="user-box">
          <input
            id="password"
            type="password"
            name="Password"
            placeholder="Password"
            required=""
          />
        </div>
        <div class="button-form">
          <button id="submit">Login</button>
          <div id="register">
            Don't have an account?
            <a href="register.html">Register</a>
          </div>
        </div>
      </form>
    </div>
      <?php
        if(isset($_POST['tienhanhdangnhap']))
        {
          $username = mysqli_real_escape_string($conn,$_POST['username']);
          $password = md5($_POST['password']);

          $sqlcheckuser = "SELECT * FROM `users` WHERE `username` = '". $username ."' AND `password` = '". $password . "'";
          $ketqua = $connect->query($sqlcheckuser);

          if($ketqua->num_row > 0){
            $user = $ketqua->fetch_array();
            $_SESSION['dangnhapthanhcong'] = 'OK';
            $_SESSION['username'] = $user["username"];
            $_SESSION['email'] = $user["email"];
            header("Refresh: 0; url=home.php");
          } else {
            echo 'Password is not correct';
            header("Refresh: 0");
          }
        }
      ?>
    <?php include('script.php') ?>
  </body>
</html>
