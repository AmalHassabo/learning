<!DOCTYPE html>
<html>
<head>
	<title>Medic</title>
</head>
<body>
<form action="Medic" method="post">
	{{ csrf_field() }}
medic name :<input type="text" name="name" placeholder="Enter name">
<br> 	
company    :<input type="text" name="company_name" placeholder="Enter name of company">
<br> 
pass       :<input type="text" name="pass" placeholder="Enter pass num">
<br>
price :<input type="text" name="price" placeholder="Enter price">
<br>
pharmacy :<input type="text" name="pharmacy" placeholder="Enter name of pharmacy">
<br>
status :<input type="text" name="status" placeholder="Enter status">
<br>
<input type="submit" value="OK ">
</form>

{{ $Medic }}



</body>