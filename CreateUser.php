<?php


  if(isset($_POST["userID"]))
  {
    $userID = $_POST["userID"];
  }


  $mysqli = new mysqli("mysql.eecs.ku.edu", "gichohu", "milksauce72", "gichohu");


  if ($mysqli->connect_error) {
      die("Connection failed: " . $mysqli->connect_error);
      echo"Connection error<br>";
      exit();
  }

  $search = $mysqli->query("SELECT Users from  VALUES where user_id='$userID'");

  echo "Search result: " .$search . "<br>";

  if($search->num_rows==0)
  {
    $myQuery = "INSERT INTO Users (user_id) VALUES( '$userID' )";
    if ($mysqli->query($myQuery) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $myQuery. "<br>" . $mysqli->error;
    }
  }
  else {
    echo "User already exists in table<br>";
  }


  $mysqli->close();

?>
