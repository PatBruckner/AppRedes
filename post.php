<?php
    $servername = "localhost";
    $username = "jugarte18";
    $password = "030899jm";
    $dbname = "jugarte18";
/*
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "chats";*/

    $conn = new mysqli($servername, $username, $password, $dbname);

    $id_user = $_GET['id_user'];
    $text_message = $_GET['text_message'];

    if ($_GET['id_message']) && isset($_GET['id_user']) && isset($_GET['text_message'])) {
        $sql = "INSERT INTO messages (id_user, text_message) VALUES (".$id_user."', '".$text_message."')";
        $result = $conn->query($sql);
    } else {
        echo 'Error';
    }
    
?>