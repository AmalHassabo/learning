
<!DOCTYPE html>
<html>
<head>
	<title>Content</title>
</head>
<body>
<form action="add" method="post">
	{{ csrf_field() }}
Content :<input type="text" name="add" placeholder="Enter name"> 		
<br>
<input type="submit" value="Add Content ">
</form>
</body>