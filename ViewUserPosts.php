<?php 

    $userID =$_POST["userID"];

    $mysqli = new mysqli("mysql.eecs.ku.edu", "gichohu", "milksauce72", "gichohu");

    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
        echo"Connection error<br>";
        exit();
    }

    $post = $mysqli->query("SELECT * FROM Posts WHERE author_id = '" . $userID . "'");

    if($post)
    {
        echo "Here are " . $userID . "'s posts:<br>";
        while($row = $post->fetch_assoc())
        {
            echo $row["content"]. "<br>";
        }
    }

    $mysqli->close();



?>