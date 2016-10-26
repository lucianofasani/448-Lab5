<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "lfasaniortiz", "lucaeecs448", "lfasaniortiz");

if (isset($_POST['delete'])) {
    $checkbox = $_POST['checkbox'];
    $count = count($checkbox);
    
    echo 'You deleted Post IDs: \n';
    for($i = 0; $i < $count; $i++) {
        $id = (int) $checkbox[$i];
        echo '$id\n';

        if ($id > 0) {
            mysql_query("DELETE FROM Posts WHERE post_id = $id");
        }
    }
}

$mysqli->close();

?>