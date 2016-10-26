<?php

$username = $_POST['username'];

$mysqli = new mysqli("mysql.eecs.ku.edu", "lfasaniortiz", "lucaeecs448", "lfasaniortiz");

$query = $mysqli->query("SELECT * FROM Posts");
echo '<table border="1">';
while($rowtwo = $query->fetch_array(MYSQLI_BOTH)){
  $value = $rowtwo['post_id'];
  echo '<tr>
    <td><input type="checkbox" name="checkbox[]" id="checkbox[]" value="$value"></td>
	<td><font size="5" face="Lucida Sans Unicode" color=black>' .$rowtwo['post_id']. '</td>
    <td><font size="5" face="Lucida Sans Unicode" color=black>' .$rowtwo['content']. '</td>
    <td><font size="5" face="Lucida Sans Unicode" color=black>' .$rowtwo['author_id']. '</td>
	</tr>';
}
echo '</table>';

$mysqli->close();

?>