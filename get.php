<?php

 define ("MAX_SIZE","100");
// connect to mysql server
$link = mysql_connect('localhost', 'sameer', 'password');
if (!$link) {
die('Not connected : ' . mysql_error());
}
// connect to database server
$db_selected = mysql_select_db('sample', $link);
if (!$db_selected) {
die ('Database error : ' . mysql_error());
}
$sql = "select image from testblob where id=10";
// the result of the query
$result = mysql_query($sql) or die("Invalid query: " .mysql_error());
//print_r($result);
// Header for the image
while ($pic = mysql_fetch_array($result)){

header("Content-type: image/jpg");
echo $pic[image];

//echo "<img src='".$pic[image]."' width='200' height='100' />" ;
}
?>