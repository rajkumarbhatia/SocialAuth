<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>

<img src="{{ Auth::user()->image}}">
<br>
 Hello, {{ Auth::user()->full_name}}
 <br>
 <a href="{{ url('logout') }}">Logout</a>

</body>
</html>