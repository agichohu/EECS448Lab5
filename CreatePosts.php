<?php
    if(isset($_POST["userID"]))
    {
      $userID = $_POST["userID"];
      $post = $_POST["post"];
    }
  
    $mysqli = new mysqli("mysql.eecs.ku.edu", "gichohu", "milksauce72", "gichohu");
  

  if ($mysqli->connect_error) {
      die("Connection failed: " . $mysqli->connect_error);
      echo"Connection error<br>";
      exit();
  }

  $search = $mysqli->query("SELECT Users from  VALUES where user_id='$userID'");

  if(mysqli_num_rows($search)>0)
  {

  }
  else
  {
      echo "<h1>Invalid user<h1>";
  }

?>