<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "webforum";

    $conn = mysqli_connect($servername , $username , $password , $database);
    if(!$conn){
        echo 'Server has not been connected due to ----> '. mysqli_connect_error($conn);
    }

?>