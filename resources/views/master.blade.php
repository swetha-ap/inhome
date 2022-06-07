<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" >
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
         body {
            font-family: Helvetica, sans-serif;
        }
        
        nav{
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .nav-links{
            padding: 28px 0;
        }
        .nav-links li{
            display: inline-block;
            margin: 0 15px;
        }
        .nav-links li a{
            text-decoration: none;
            padding: 5px 0;
        }
        .navbar-nav > li{
  padding-left:180px;
  padding-right:30px;
}
.topnav a:hover {
  background-color: #ddd;
  color: black;
}
 </style>
</head>
<body>
   
    <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
  <a class="navbar-brand" href="#">
      <img src="images/1.jpg"  height="80">
  </a>
  <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> -->

  <div class="collapse navbar-collapse topnav" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route ('home') }}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route ('about') }}">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route ('service') }}">Services</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="">Sign Up</a>
      </li> -->
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
          Log In
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route ('login') }}">Client</a>
          <a class="dropdown-item" href="{{ route ('login') }}">Service Provider</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Admin</a>
        </div>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="{{ route ('login') }}">Log In</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
          Sign Up
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route ('signupcustomer') }}">Client</a>
          <a class="dropdown-item" href="{{ route ('signupservice') }}">Service Provider</a>
        </div>
      </li>
      
    </ul>
    
  </div>
</nav>
                           <!-- BREADCRUMBS -->

<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light"> -->
  <!-- <div class="container-fluid">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route ('home') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route ('about') }}">About</a></li>
        <li class="breadcrumb-item active" aria-current="page"><a href="{{ route ('service') }}">Services</a></li>
      </ol>
    </nav>
  </div>
</nav>  -->
   <div>
    @yield('content')
    </div>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">
      <img src="images/1.jpg"  height="80">
  </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
      Contact us : 9480974064
      </li>
      <li class="nav-item">
      Trusted Services Across India
      </li> 
    </ul>
    
  </div>
</nav>
</body>
</html>