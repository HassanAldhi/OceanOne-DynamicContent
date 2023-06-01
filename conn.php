<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "ocean_one";

    //create connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn){
        die("connection failed : " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM section_1";
    $result = mysqli_query($conn, $sql);

    // if(mysqli_num_rows($result) > 0){
    //     while($row = mysqli_fetch_assoc($result)){
    //         echo "NIM: ".$row["nim"]. "-Name: " .$row["nama"]. " " .$row["alamat"]. "<br>";
    //     }
    // }else{
    //     echo "0 results";
    // }
?>