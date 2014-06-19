<?php
$conn = mysql_connect("localhost","szi113_wp2usr","wp2pass999");
mysql_select_db("szi113_wp2",$conn);
if(count($_POST)>0) {
mysql_query("UPDATE addproject set projectname='" . $_POST["projectname"] . "', projectdescription='" . $_POST["projectdescription"] . "', date='" . $_POST["date"] . "' WHERE userId='" . $_POST["userId"] . "'");
$message = "Record Modified Successfully";
}
$result = mysql_query("SELECT * FROM addproject WHERE userId='" . $_GET["userId"] . "'");
$row= mysql_fetch_array($result);
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
<td colspan="2">Edit User</td>
</tr>
<tr>
<td><label>projectname</label></td>
<td><input type="hidden" name="userId" class="txtField" value="<?php echo $row['userId']; ?>">
<input type="text" name="projectname" class="txtField" value="<?php echo $row['projectname']; ?>"></td>
</tr>
<tr>
<td><label>Project description</label></td>
<td><input type="text" name="projectdescription" class="txtField" value="<?php echo $row['projectdescription']; ?>"></td>
</tr>
<td><label>date</label></td>
<td><input type="date" name="date" class="txtField" value="<?php echo $row['date']; ?>"></td>
</tr>
<!--<td><label>Last Name</label></td>
<td><input type="text" name="lastName" class="txtField" value="<?php echo $row['lastName']; ?>"></td>-->
</tr>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>
</table>
</div>
</form>
</body></html>