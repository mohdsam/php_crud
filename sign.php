<?php
$message="";
if(count($_POST)>0) {
$conn = mysql_connect("localhost","sameer","password");
mysql_select_db("sample",$conn);
mysql_query("INSERT INTO Persons (FirstName, LastName, Age,contact,gender,password)VALUES ('".$_POST["FirstName"]. "','" . $_POST["LastName"] . "','" . $_POST["Age"] . "','" . $_POST["contact"] . "','".$_POST["gender"]."','".$_POST["password"]."')");
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
<?php
$con=mysql_connect( "localhost","root","sizmic");
mysql_select_db ("sample",$con);
if(@$_POST ['submit'])
{
	
$file = $_FILES ['file'];
$name1 = $file ['name'];
$type = $file ['type'];
$size = $file ['size'];
$tmppath = $file ['tmp_name']; 
if($name1!="")
{
if(move_uploaded_file ($tmppath, 'images/'.$name1))//image is a folder in which you will save image
{
$query="insert into Persons set photo='$name1'";
mysql_query ($query) or die ('could not updated:'.mysql_error());
echo "Your image upload successfully !!";
}
//header("Content-type:images/jpg");
//echo "<img src='get.php?image_id=1'/>"
}

}
?>
<form name="frmUser" method="post" action="" enctype="multipart/form-data">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr class="tableheader">
<td colspan="2">Add New User</td>
</tr>
<tr>
<td><label>Firstname</label></td>
<td><input type="text" name="FirstName" class="txtField"></td>
</tr>
<tr>
<td><label>Lastname</label></td>
<td><input type="text" name="LastName" class="txtField"></td>
</tr>
<tr>
<td><label>Age</label></td>
<td><input type="text" name="Age" class="txtField"></td>
</tr>
<tr>
<td><label>contact</label></td>
<td><input type="text" name="contact" class="txtField"></td>
</tr>
<tr>
<td><label>gender</label></td>
<td><input type="text" name="gender" class="txtField"></td>
</tr>
<tr>
	<td><label>password</label></td>
	<td><input type="password" name="password" class="txtField"></td>
</tr>
<tr>
	Photo <input type="file" name="file" />

</tr>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>

</table>

</form>

</body></html>