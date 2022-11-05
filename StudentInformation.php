<!DOCTYPE html>
<!--
Author Name:Pratik Lathiya
created Date:22/06/2022
Programe Name :Create a database TABLE named ‘Movies’
-->

<html>
<head>
  <title>Create Student information Form</title>
	<link rel="stylesheet" href="style.css"/>
</head>
<body>
	<div>
<?php
// Set the variables for the database access:
require_once('connectvars.php');

//Create table inside the database
$dbc=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME); // 1. mysqli_connect() goes here!
        
$table_exists_query = "SELECT*FROM Employee" ;         // 2. The SELECT SQL Query goes here! 
if (mysqli_query ($dbc, $table_exists_query))
{
 	echo "Table with name STUDENT already exists. <br>Go to <a href='studentform.php'>Insert data</a> to add data of students";
} 
        else {
	$query = "CREATE TABLE IF NOT EXISTS  
             Employee (
             id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
             employeename TEXT,
             companyname TEXT,
             dateofbirth date,
             position TEXT,
             yearofjoin TEXT 
                          )";              // 3. The SQL statent to create the table goes here!
	 
	   // define the database column names here!
  
	if (mysqli_query ($dbc, $query)) {
        
		                     echo "The query was successfully executed! You created the student information Table <br />Go to <a href='studentform.php'>Insert data of students</a> to add data of stduents";
	                 
                    } 
            
            else {
                
		            echo "The query could not be executed! Error: " . mysqli_error($dbc);
	             }
}	
mysqli_close($dbc);
?>
	</div>
</body>
</html>