<!DOCTYPE html>
<html>
<head><title>Display student data Records</title>
<link rel="stylesheet" href="style.css"/>
</head>
<body>
<div>
<?php
/*
Author Name : Pratik Lathiya
Created Date :22/06/2022
Program Name : creating displaying student data list php script
*/
require_once('connectvars.php');
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$query = "SELECT * from Employee";
$result = mysqli_query($dbc, $query);
print ("<h2>Display Students information</h2>"); // Title and main div
print ("<div class='wrapper'>");
// Fetch the results from the database.
while ($Row = mysqli_fetch_array($result)) {
print ("<article>");
print ("<img src='st.clair.jpg'
/>");
print ("<p>Employee Name : $Row[employeename]</p>");
print ("<p>College Name: $Row[companyname]</p>");
print ("<p>Date of Birth: $Row[dateofbirth]</p>");
print ("<p>Course Name: $Row[position]</p>");
print ("<p>Year of Graduate: $Row[yearofjoin]</p>");
print ("</article>");
}
print ("</div>");
print("<p class='clear'></p>");
mysqli_close ($dbc);
$currentDate = date("l F j,Y");
print("<p style='padding-top: 15px;'>
<a href='studentform.php'>[+]Add A data of student</a></p>");

print ("<br /><p style=\"text-align: center; clear:left;\">
<em>{Parth Vandra!} &nbsp;&nbsp;
Date: $currentDate </em></p>");
?>