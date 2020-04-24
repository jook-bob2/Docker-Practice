<?php
    $conn = mysqli_connect(
    'management-tutorial.ccgxmy3lrzke.us-east-2.rds.amazonaws.com',
    'user',
    'test1234',
    'board',
    '3306'
    );
    if(mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: ".mysqli_connect_error();
    }
    $sql = "SELECT * FROM tb_board";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    print_r($row["writer"]);
?>