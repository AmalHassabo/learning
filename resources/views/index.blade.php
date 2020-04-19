<!DOCTYPE html>
<html>
<head>
	<title>Employee</title>
</head>
<body>
<form action="Employee" method="post">
	{{ csrf_field() }}
name :<input type="text" name="name" placeholder="Enter name"> 		
<br>
 phone num:<input type="text" name="phone_num" placeholder="Enter phone num"> 		<br>
degree of job:<input type="text" name="degree_of_job" placeholder="Enter degree"> <br>
job :<input type="text" name="job" placeholder="Enter job"> 
<br>
email :<input type="text" name="email" placeholder="Enter email"> 
<br>
email :<input type="text" name="password" placeholder="Enter password"> 
<br>
<input type="submit" value="submi ">
</form>
</body>

{{$Employee }}

