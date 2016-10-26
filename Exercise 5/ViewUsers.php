<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "lfasaniortiz", "lucaeecs448", "lfasaniortiz");

$query = $mysqli->query("SELECT user_id FROM Users");
echo '<table border="1">';
while($rowtwo = $query->fetch_array(MYSQLI_BOTH)){
  echo '<tr>
        <td><font size="10" face="Lucida Sans Unicode" color=black>' .$rowtwo['user_id'].'</td>
        </tr>';
}
echo '</table>';

$mysqli->close();
?>