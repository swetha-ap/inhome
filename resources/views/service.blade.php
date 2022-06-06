@extends('master')
@section('content')
<style>
       .text {
          color: white;
          font-size: 50px;
          position: absolute;
          top: 10%;
          left: 50%;
          -webkit-transform: translate(-50%, -50%);
          -ms-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
          text-align: center;
     }

      .overlay {
          position: absolute;
          bottom: 0;
          background: rgba(16, 16, 16, 0.832);
          background: rgba(17, 16, 15, 0.5);
          /* Black see-through */
          /* color: #f1f1f1;  */
          width: 100%;
          height: 100%;
          opacity: 0;
          transition: .5s ease;
          color: white;
          font-size: 20px;
          padding: 20px;
          text-align: center;
     }
     .container:hover .overlay {
          opacity: 1;
     }
     .bgimg1{
         background-image: linear-gradient(to bottom right,rgb(50, 176, 190),rgb(188, 237, 241),white);
     }
</style>
<div class="container-fluid bgimg1" style="height:900px; ">
 <div class="row ">
      <div class="col-12" style="height: 100px;"></div>
              <div class="col-12" style="height: 100px;">
                   <h1 align="center" style="font-family: cursive; color: rgb(209, 46, 5);" >We Provide You with the Best Of Best</h1>
              </div>
         </div>
         <div class="row">
              <div class="col-1" style="height: 100px;"></div>
              <div class="col-3" style="display:inline-block; height:300px;">
                    <div class="card" style="width: 18rem;height: 530px;">
                         <img src="images/c1.gif" class="card-img-top" style="height: 300px;"alt="...">
                         <div class="card-body " >
                           <h3 class="card-title" style="color: darkblue;">Cleaning</h3>
                           <h5 class="card-text" style="color: darkblue;">Everyone dreams of a clean home.<br />We Clean so you dont have to!!!</h5>
                           <a href="#" class="btn btn-primary">Book Now</a>
                         </div>
                    </div>
               </div>
                   <!-- <h3 align="center">Maids</h3>
                   <div class="container">
                  
                   <img src="images/maid.jpg" class="img-fluid" style="height:250px; padding-left: 50px;">
                   <div class="overlay">
                    <div class="text">MAIDS</div>
                   </div> -->
                   <div class="col-1"></div>
                   <div class="col-3" style="display:inline-block; height:300px;">
                    <div class="card" style="width: 18rem;">
                         <img src="images/b1.gif" class="card-img-top img-fluid" alt="...">
                         <div class="card-body">
                           <h3 class="card-title" style="color: darkmagenta;">Nanny</h3>
                           <h5 class="card-text"  style="color: darkmagenta;">Need a break? Some Quality time for yourselves? <br />A Reliable Caring Nanny is just a Click Away!!!</h5>
                           <a href="#" class="btn btn-primary">Book Now</a>
                         </div>
                       </div>
                   </div>
                   <div class="col-1"></div>
                   <div class="col-3" style="display:inline-block; height:300px;">
                    <div class="card" style="width: 18rem; height: 530px;">
                         <img src="images/co1.gif" class="card-img-top" style="height: 300px;" alt="...">
                         <div class="card-body">
                           <h3 class="card-title" style="color: darkred;">Cooking</h3>
                           <h5 class="card-text" style="color: darkred;">Help Us Help You!!!<br />Fill your Heart and Soul with Yumminess!!! </h5>
                           <a href="#" class="btn btn-primary">Book Now</a>
                         </div>
                       </div>
                   </div>
          </div>
              <!-- <div class="col-4">
                   <h3 align="center">Babysitter</h3>
                   <div class="container">
                   <img src="images/bs.jpg" class="img-fluid" style="height:250px; padding-left: 80px;">
                   <div class="overlay">
                    <div class="text">BABYSITTERS</div>
                   </div>
                   </div>
               </div> -->
              <!-- <div class="col-4">
                   <h3 align="center">Cooks</h3>
                   <div class="container">
                   <img src="images/cook.jpeg" class="img-fluid" style="height:250px; padding-left: 80px;">
                   <div class="overlay">
                    <div class="text">COOKS</div>
                   </div>
                   </div>
              </div> -->
</div>
@endsection