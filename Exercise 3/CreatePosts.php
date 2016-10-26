<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "lfasaniortiz", "lucaeecs448", "lfasaniortiz");

if($mysqli->connect_errno){
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$username = $_POST['username'];
$post = $_POST['post'];

if(empty($username) || empty($post)){
    echo("You must enter text into BOTH text boxes.");
}else{

    
    $sql = "SELECT * FROM Users WHERE user_id='$username'";
    $check = $mysqli->query($sql);
    $row_cnt = $check->num_rows;

    if($row_cnt > 0){

        $userPost = "INSERT INTO Posts (author_id, content) VALUES ('$username', '$post')";

        if($mysqli->query($userPost)){

        echo "Post Saved!";

        } else {
            echo "Error: " . $userPost . "<br>" . $mysqli->error;
        }
    } else {
        echo "That username does not exist";
    }

}

$mysqli->close();


?>
