<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "chats";

    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT * FROM messages;";
    $result = $conn->query($sql);
    
    if($result->num_rows > 0) {
        $rows = array();
        while($r = mysqli_fetch_assoc($result)) {
            $rows[] = $r;
        }
        print json_encode($rows);
    } else {
        echo "0 results";
    }
?>