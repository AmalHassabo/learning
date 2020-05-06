<!DOCTYPE html>
<html>
<head>
	<title>Medic</title>
</head>
<body>
<form action="/edit/{{$Medic->id}}" method="post">
	{{ csrf_field() }}
medic name :<input type="text" name="name" value="{{$Medic->name}}" placeholder="Enter name">
<br> 	
company    :<input type="text" name="company_name" value="{{$Medic->company_name}}" placeholder="Enter name of company">
<br> 
pass       :<input type="text" name="pass" value="{{$Medic->pass}}" placeholder="Enter pass num">
<br>
price :<input type="text" name="price" value="{{$Medic->price}}" placeholder="Enter price">
<br>
pharmacy :<input type="text" name="pharmacy" value="{{$Medic->pharmacy}}" placeholder="Enter name of pharmacy">
<br>
status :<input type="text" name="status" value="{{$Medic->status}}"
 placeholder="Enter status">
<br>
<input type="submit" value="OK ">
</form>






</body>