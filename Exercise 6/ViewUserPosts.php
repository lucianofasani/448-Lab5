<?php

$username = $_POST['username'];

$mysqli = new mysqli("mysql.eecs.ku.edu", "lfasaniortiz", "lucaeecs448", "lfasaniortiz");

$query = $mysqli->query("SELECT content FROM Posts WHERE author_id='$username'");
echo '<table border="1">';
while($rowtwo = $query->fetch_array(MYSQLI_BOTH)){
  echo '<tr>
	<td><font size="5" face="Lucida Sans Unicode" color=black>' .$rowtwo['content']. '</td>
	</tr>';
}
echo '</table>';

$mysqli->close();

?>