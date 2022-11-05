<!DOCTYPE html>
<html>
<head><title>Inserting Data into student information Table</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div>
<?php
/*
Author Name : Pratik Lathiya
Created Date :22/06/2022
Program Name : creating basic insert student data with use of php script
*/
$employeename = trim($_POST['employeename']); // Trim the incoming data.
$companyname = trim($_POST['companyname']);
$dateofbirth = trim($_POST['dateofbirth']);
$position = trim($_POST['position']);
$yearofjoin = trim($_POST['yearofjoin']);
require_once('connectvars.php');
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

$query =
"INSERT into Employee
values ('0', '$employeename', '$companyname', '$dateofbirth', '$position','$yearofjoin')";
print ("The query is:<br />$query<br /><br />");
if (mysqli_query ($dbc, $query))
 {
    print ("The query was successfully executed!<br />");
    print ("<a href='displaydatastudents.php'>View data of students</a>");
} 
 else 
 {
    print ("The query could not be executed!<br />".
    mysqli_error($dbc));
 }
 mysqli_close ($dbc);
?>
</div>
</body>
</html>

