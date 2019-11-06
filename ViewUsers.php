<?php 

    $mysqli = new mysqli("mysql.eecs.ku.edu", "gichohu", "milksauce72", "gichohu");

    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
        echo"Connection error<br>";
        exit();
    }

    $query = $mysqli->query("SELECT user_id FROM Users");

    if($query)
    {
        echo "here is the table: <table border=2px>";

        while($row = $query->fetch_assoc())
        {
            echo "<tr><td>" . $row['user_id'] ."</td></tr>";
        }
        echo"</table>";
    }
    else
    {
        echo "Something went wrong <br>";
    }


?>