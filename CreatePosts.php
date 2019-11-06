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

  $search = $mysqli->query("SELECT * from Users where user_id='$userID'");

  if(mysqli_num_rows($search)>0)
  {
    $userPost = $mysqli->query("INSERT INTO Posts (author_id, content) VALUES ('" . $userID . "', '" . $post ."')");
    if($userPost)
    {
      echo "Post created successfully<br>";
    }
  }
  else
  {
      echo "Username not found<br>";
  }

?>