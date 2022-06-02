<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master</title>
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
    </style>
</head>
<body>
    <div class="header">
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
    </div>
    <div>
    @yield('content')
    </div>
    <div class="footer">
        <nav>
            <img src="images/1.jpg" height="80px">
            <p>Contact us : 9480974064</p>
            <p>Trusted Services Across India</p>
        </nav>
    </div>
</body>
</html>