<!DOCTYPE html>
<!--
    Author Name : Pratik Lathiya
    created Date : 22/06/2022
    Programe Name : creating form for student information
-->
<html>
<head><title>HTML student data Input Form</title>
 <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div>
<h3>Enter a your data into your college database<br />
Programmed by {Parth Vandra}</h3>
<form action="insertdatastudent.php" method="post">
 <fieldset>
 <legend>student data Information</legend>
 <label for="employeename">Employee Name:</label>
 <input type="text" id="employeename" name="employeename" size="20" required><br/>
 <label for="companyname">College Name:</label>
 <input type="text" id="companyname" name="companyname"
 size="30" required><br/>
 <label for="dateofbirth">Date of birth:</label>
 <input type="text" id="datofbirth" name="dateofbirth" size="8" required><br/>
 <label for="position">Course Name:</label>
 <input type="text" id="position" name="position" size="20" required><br/>
 <label for="yearofjoin">Year of Graduate:</label>
 <input type="text" id="yearofjoin" name="yearofjoin" size="6" required><br/>
 </fieldset>
 <input type="submit" name="submit"
value="[+] Add  Your Data " />
</form>
</div>
</body>
</html>