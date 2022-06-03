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
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <style>
         body {
            font-family: Helvetica, sans-serif;
        }
        .header{
            height: 100px;
            
            padding: 0 8%;
            position: relative;
        }
        .footer{
            height: 50px;
            
            padding: 5% 8%;
            position: relative;
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
    </style>
</head>
<body>
    <!-- <div class="header">
           <nav>
              <img src="images/1.jpg" height="80px">
               <ul class="nav-links">
                   <li><a href="{{ route ('home') }}">Home</a></li>
                   <li><a href="{{ route ('about') }}">About</a></li>
                   <li><a href="#1">Services</a></li>
                   <li><a href="">Login</a></li>
                   <li><a href="">Sign Up</a></li>
               </ul>
           </nav>
    </div> -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">
      <img src="images/1.jpg"  height="80">
  </a>
  <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> -->

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route ('home') }}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route ('about') }}">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#1">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Sign Up</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
          Log In
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Client</a>
          <a class="dropdown-item" href="#">Service Provider</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Admin</a>
        </div>
      </li>
      
    </ul>
    
  </div>
</nav>
   <div>
    @yield('content')
    </div>
    <!-- <div class="footer">
        <nav>
            <img src="images/1.jpg" height="80px">
            <p>Contact us : 9480974064</p>
            <p>Trusted Services Across India</p>
        </nav>
    </div> -->
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