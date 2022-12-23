<!DOCTYPE html>
<html>
<head>
   <title>Home Page</title>
</head>

<link rel="stylesheet" href="{{asset('assets/allcss/home.css')}}">
<body style="background-color:silver;">
<div class="image">
    <img src="{{asset('assets/admin/dist/img/c19.png')}}" width="120 height="120">
</div>

<ul>
    <li><a href="login"> Adminlogin</a></li>
    <li> <a href="{{ route('center_admin.login') }}"> Center login</a></li>
    <li> <a href="{{ route('vaccine_user.login') }}"> User login</a></li>
    <li><a href="register">Register</a></li>
    <li><a href="{{route('contactus')}}">Contact Us</a></li>
    <li><a href="{{route('aboutus')}}">About Us</a></li>
    <li><a href="{{route('welcome')}}">Home</a></li>
</ul>
</div>
<div class="welcome-text">
    <h1> Covid_19 Vaccination System</h1>
</div>



</body>
</html>

