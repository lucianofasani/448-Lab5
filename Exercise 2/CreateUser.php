<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "lfasaniortiz", "lucaeecs448", "lfasaniortiz");

if($mysqli->connect_errno){
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$username = $_POST['username'];

if(empty($username)){
    echo("You must enter a username into the text box.");
}else{

    $sql = "INSERT INTO Users (user_id) VALUES ('$username')";

    if($mysqli->query($sql)){
        echo "New user created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
    

}

$mysqli->close();


?>