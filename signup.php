<?php

  try{
    $pdo = new PDO('mysql:host=localhost;dbname=legend','root','');
    if (!empty($_POST['id']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])){
    $sql = "insert into user (id,name,email,password) values (:i, :n, :e, :p)";
    $stmt = $pdo->prepare($sql);
    if($stmt->execute(array(':i' => $_POST['id'],':n' => $_POST['name'],':e' => $_POST['email'],':p' => $_POST['password']))==true){
      header("location:menu.php");
      /*echo "<script type=\"text/javascript\">
          window.alert('sign up successfully');
          </script>";*/
    }
    else
      echo "<div style='background-color:black; color:white;'>error<div>";
  }
  }
  catch(PDOException $e){
    //echo "<div style='background-color:black; color:white;'>error ".$e->getMessage()."</div>";
    echo "<script type=\"text/javascript\">
          window.alert('you are already sign up');
          </script>";
  }
  $pdo = null;

?>


<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="Css\signup.css">
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
    <div class="logimg">
      
      <h3 style="margin-left: 30px;"> why you should to sign up in our website ? <br>
        1) to get the new offers.<br>
        2) to enter the monthly draw to get a free meal<br> for you and one person from your choice .</h3><br>

    </div>
     <div id="login-box">
  <div class="sign">
    <h1 class="signup">Sign up</h1>
    <form method="post">
      <input type="text" name="name" placeholder="Username"><br>
      <input type="email" name="email" placeholder="E-mail">
      <input type="password" name="password" placeholder="Password">
      <input type="tel" name="id" placeholder="Phone Number">
      <input type="submit" value="Sign up">
    </form>
  </div>
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