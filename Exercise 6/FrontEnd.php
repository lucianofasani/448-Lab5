<?php

$mysqli = new mysqli("mysql.eecs.ku.edu", "lfasaniortiz", "lucaeecs448", "lfasaniortiz");

$query = $mysqli->query("SELECT user_id FROM Users");
echo '<select name = "username">';
while($rowtwo = $query->fetch_array(MYSQLI_BOTH)){
  echo '<option value = "' .$rowtwo['user_id'].'">'.$rowtwo['user_id'].'</option>';
}
echo '</select>';

$mysqli->close();

?>