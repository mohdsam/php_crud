<?php
if(count($_POST)>0) {
$conn = mysql_connect("localhost","szi113_wp2usr","wp2pass999");
mysql_select_db("szi113_wp2",$conn);
mysql_query("INSERT INTO addproject (projectname, projectdescription, date) VALUES ('" . $_POST["projectname"] . "','" . $_POST["projectdescription"] . "','" . $_POST["date"] . "')");
$current_id = mysql_insert_id();
if(!empty($current_id)) {
$message = "New User Added Successfully";
}
}
?>
<html>
<head>
<title>Add New User</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<form name="frmUser" method="post" action="">
<div style="width:500px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<div align="right" style="padding-bottom:5px;"><a href="list_user.php" class="link"><img alt='List' title='List' src='images/list.png' width='15px' height='15px'/> List User</a></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr class="tableheader">
<td colspan="2">Add New User</td>
</tr>
<tr>
<td><label>projectname</label></td>
<td><input type="text" name="projectname" class="txtField"></td>
</tr>
<tr>
<td><label>Project description</label></td>
<td><input type="text" name="projectdescription" class="txtField"></td>
</tr>
<td><label>start date</label></td>
<td><input type="date" name="date" class="txtField"></td>
</tr>
<!--<td><label>Last Name</label></td>
<td><input type="text" name="lastName" class="txtField"></td>-->
</tr>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>
</table>
</div>
</form>
<h1>sampel</h1>

</body></html>
