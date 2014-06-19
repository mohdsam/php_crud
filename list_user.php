<?php
$conn = mysql_connect("localhost","szi113_wp2usr","wp2pass999");
mysql_select_db("szi113_wp2",$conn);
$result = mysql_query("SELECT * FROM addproject");
?>
<html>
<head>
<title>Users List</title>
<!--<link rel="stylesheet" type="text/css" href="styles.css" />-->

</head>
<body>
<form name="frmUser" method="post" action="">
<div style="width:500px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<div align="right" style="padding-bottom:5px;"><a href="add_user.php" class="link"><img alt='Add' title='Add' src='images/add.png' width='15px' height='15px'/> Add User</a></div>
<table border="0" cellpadding="10" cellspacing="1" width="500" class="tblListForm">
<tr class="listheader">
<td>projectname</td>
<td>project description</td>
<td>date</td>
<td>CRUD Actions</td>
</tr>
<?php
$i=0;
while($row = mysql_fetch_array($result)) {
if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><?php echo $row["projectname"]; ?></td>
<td><?php echo $row["projectdescription"]; ?></td>
<td><?php echo $row["date"]; ?></td>
<td><a href="edit_user.php?userId=<?php echo $row["userId"]; ?>" class="link"><img alt='Edit' title='Edit' src='images/edit.png' width='15px' height='15px' hspace='10' /></a>  <a href="delete_user.php?userId=<?php echo $row["userId"]; ?>"  class="link"><img alt='Delete' title='Delete' src='images/delete.png' width='15px' height='15px'hspace='10' /></a></td>
</tr>
<?php
$i++;
}
?>
</table>
</form>
</div>
</body></html>