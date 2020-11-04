<?php
    $servername = "localhost";
    $username = "jugarte18";
    $password = "030899jm";
    $dbname = "jugarte18";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $id_message = $_GET['id_message'];
    $id_user = $_GET['id_user'];
    $text_message = $_GET['text_message'];

    if (isset($_GET['id_message']) && isset($_SESSION['id_user']) && isset($_SESSION['text_message'])) {
        $sql = "INSERT INTO messages (id_message, id_user, text_message) VALUES ($id_message, $id_user, $text_message)";
        $result = $conn->query($sql);
    } else {
        echo 'Error';
    }
    
?>