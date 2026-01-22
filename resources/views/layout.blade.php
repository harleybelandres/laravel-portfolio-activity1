<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title', 'My Portfolio')</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<style>
* {
margin: 0;
padding: 0;
box-sizing: border-box;
}
body {
font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
line-height: 1.6;
background: @yield('bg-color', '#f4f4f4');
}
nav {
background: #057005;
color: white;
padding: 1rem 2rem;
}
nav ul {
list-style: none;
display: flex;
gap: 2rem;
}
nav a {
color: white;
text-decoration: none;
font-weight: bold;
border-bottom: 2px solid black;
}
nav a:hover {

color: #3498db;
}
.container {
max-width: 1200px;
margin: 2rem auto;
padding: 2rem;
background: white;
border-radius: 8px;
box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}
h1 {
color: #333;
margin-bottom: 1rem;
}
footer {
text-align: center;
padding: 2rem;
background: #057005;
color: white;
margin-top: 2rem;
}
</style>
</head>
<body>
<nav>
<ul>
<h2>My Portfolio</h2>
<li><a href="{{ route('home') }}">Home</a></li>
<li><a href="{{ route('about') }}">About</a></li>
<li><a href="{{ route('projects') }}">Projects</a></li>
<li><a href="{{ route('contact') }}">Contact</a></li>
<li><a href="{{ route('hobbies') }}">Hobbies</a></li>
</ul>
</nav>
<div class="container">
@yield('content')
</div>
<footer>
<p>&copy; {{ date('Y') }} My Portfolio. All rights reserved.</p>

</footer>
</body>
</html>