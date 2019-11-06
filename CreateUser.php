<?php


  if(isset($_POST["go"]))
  {
    $userID = $_POST["userID"];
  }
  else
  {
    echo "user could not be created";
    exit();
  }


  // echo "user: " .$userID . "<br>";

  $mysqli = new mysqli("mysql.eecs.ku.edu", "gichohu", "milksauce72", "gichohu");

  if ($mysqli->connect_error) {
      die("Connection failed: " . $mysqli->connect_error);
      echo"Connection error<br>";
      exit();
  }
  // $query= "SELECT user_id FROM Users";
  // $searchQ= "SELECT * FROM Users WHERE user_id = '$userID'";
  // $search = $mysqli->query($searchQ);
  $search = $mysqli->query("SELECT * from Users where user_id='$userID'");

  if(mysqli_num_rows($search)>0)
  {
    echo "User already exists<br>";
    exit();
  }
  else
  {
    $myQuery = "INSERT INTO Users (user_id) VALUES('" .$userID. "');";
    if($mysqli->query($myQuery)=== TRUE)
    {
        echo "New record created successfully for user: ".$userID. "<br>";
    } else {
        echo "Error: " . $myQuery. "<br>" . $mysqli->error;
    }
  
  }

  $mysqli->close();

?>
