<?php
$conn = mysql_connect("localhost","szi113_wp2usr","wp2pass999");
mysql_select_db("szi113_wp2",$conn);
mysql_query("DELETE FROM addproject WHERE userId='" . $_GET["userId"] . "'");
header("Location:list_user.php");
?>