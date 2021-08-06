<?php
    $conn = mysqli_connect("localhost", "root", "", "studentsearch");

    if(!$conn){
        echo 'Not Connected Database' .mysqli_connect_error();
    }

?>