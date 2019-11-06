<?php

$mysqli = new mysqli("mysql.eecs.ku.edu", "gichohu", "milksauce72", "gichohu");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
    echo"Connection error<br>";
    exit();
}

foreach($_POST['check'] as $post)
{
    $query = "DELETE FROM Posts WHERE post_id='$post'";
    if($mysqli->query($query))
    {
      echo "Post with post_id  '$post' was deleted<br>";
    }
    else
    {
      echo "Post with post_id '$post' could not be deleted<br>";
    }
}

$mysqli->close();

?>