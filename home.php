<?php

  $pdo = new PDO('mysql:host=localhost;dbname=legend','root','');
  if(!empty($_POST['email']) && !empty($_POST['password']))
  {
    $sql = "SELECT * FROM user WHERE email=:e AND password=:p";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(':e' => $_POST['email'],':p' => $_POST['password']));
    if($stmt->rowCount() >= 1)
    {
      header("location:menu.php");
      exit();
    }
    else 
    {
      echo "<script type=\"text/javascript\">
      window.alert('email or password wrong');
      </script>";
    }
  }

?>


<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="Css\home.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-black bg-black">
    <div class="container-fluid">
    <img src="Photos\Legends.png" width="200px" height="150px">
    <ul>
      <li><b><a href="home.php">Home</a></b></li>
      <li><b><a href="menu.php">Menu</a></b></li>
      <li><b><a href="aboutus.php">About us</a></b></li>
      <li><b><a href="signup.php">Sign up</a></b></li>
    </ul>
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
<div style="height:600px;">
  <p class="benifits">Basically, Burger prevents weight gain and enhances your fat loss by improving the metabolism of the body. Each and every cell has protein. It is an essential compound in your body which help you to keep your body active and productive.</p>
  <div class="content">
    <header> Log In </header>
    <form method="post" action="#">
      <div class="field">
        <input type="email" name="email" placeholder="E-mail">
      </div>
      <div class="field space">
        <input type="password" class="pass-key" name="password" required placeholder="Password">
      </div>
      <div class="pass">
        <a href="signup.php">Forgot Password ?</a>
      </div>
      <div class="field">
        <input type="submit" value="LOG-IN">
      </div>
        </form>
      </div>
</div>
  
  <div class="footer">
    <div>
      <img src="Photos\Legends.png" class="image">
    </div>
    <div>
      <h1 class="names">ibrahim sabouh<br>ali obaid<br>mahmoud antabli<br>Mohanad aldabbas</h1>
    </div>
    <div style="text-align: center;margin-top: 40px;">
          <h2 style="margin-top: 40px; color: white;"> 07-9500-0333</h2>
          <h2> <a href="mailto:" style="text-decoration: none; color:white;">example@gmail.com</a></h2>
      <a href="https://www.whatsapp.com"><img src="whatsapp.png" style="height:50px; width: 50px; float: right; margin-top: 40px; margin-right: 240px;"></a>
      <a href="https://www.facebook.com"><img src="facebook.png" style="height:50px; width: 50px; float: right; margin-top: 40px; margin-right: 50px;"></a>
      <a href="https://twitter.com"><img src="twitter.png" style="height:50px; width: 50px; float: right; margin-top: 40px; margin-right: 50px;"></a>
      <a href="https://www.instagram.com"><img src="instagram.png" style="height:50px; width: 50px; float: right; margin-top: 40px; margin-right: 50px;"></a>
    </div>
  </div>
</body>
</html>