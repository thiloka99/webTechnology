<html>
<head> 
	<title> Form example </title>
</head>

<body>
<h1> Membership form </h1> 
<p> To register, please fill in your detils below and click send Details.</p> 
<!-- post md is secure than get -->
<form action="pro_reg.php" method="post"> 
<!-- http://localhost/ex2.php?Fname=abi&Lname=shaya&submits=Submit 
Enter your fname: <input type="text" name="Fname"> <br>
Enter your lname: <input type="text" name="Lname"> <br>
<input type="Submit" name="submits" value="Submit">  -->
First name: <input type="text" name="Fname"> <br><br>
Last name: <input type="text" name="Lname"> <br><br>
Gender: <label for="male"> &emsp; Male </label>
		<input type="radio" name="gender" value="male"> 
		<label for="female"> &emsp; Female </label> 	
		<input type="radio" name="gender" value="female"> <br><br>
Which course are you following at UoJ? 
<select name="course">
	<option> Computer Science </option>
	<option> Physical Science </option>
	<option> Bio Science </option>
</select> <br><br>
Password: <input type="text" name="password"> <br><br><br>
<input type="Submit" name="submit" value="Submit">
<input type="Reset" name="submit" value="Reset">
</form>
</body>
</html>