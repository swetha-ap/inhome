@extends('master')
@section('content')
<style>
    
.overlay {
  position: absolute;
  bottom: 0;
  background: rgba(16, 16, 16, 0.832);
  background: rgba(17, 16, 15, 0.5); /* Black see-through */
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
.container:hover .overlay {
  opacity: 1;
}
</style>
    <div class="container-fluid">
         <div class="row"></div>
         <div class="col" style="height: 10px;"></div>
         <div class="row">
           
            <div class="col-12" style="width:1300px; height: 600px;">
               <img src="{{ asset('images/banner.png') }}" style="height: 600px; width: 100%">
            </div>
         </div>
         
    </div>    
    <div id="1" class="container-fluid bg-light " style="height:500px;">
         <div class="row">
              <div class="col"  style="height: 100px;"></div>
         </div>
         <div class="row ">
              <div class="col-12" style="height: 100px;">
                   <h2 align="center">Quality Services , A Click Away</h2>
              </div>
         </div>
         <div class="row">
              <!-- <div class="col-1"></div> -->
              <div class="col-4">
                   <!-- <h3 align="center">Maids</h3> -->
                   <div class="container">
                  
                   <img src="images/maids.jpg" class="img-fluid" style="height:250px; padding-left: 50px;">
                   <div class="overlay">
                    <div class="text">MAIDS</div>
                   </div>
                   <!-- <img src="images/clean.jpg" class="img-fluid"> -->
              </div></div>
              <div class="col-4">
                   <!-- <h3 align="center">Babysitter</h3> -->
                   <div class="container">
                   <img src="images/bs.jpg" class="img-fluid" style="height:250px; padding-left: 80px;">
                   <div class="overlay">
                    <div class="text">BABYSITTERS</div>
                   </div>
                   </div>
               </div>
              <div class="col-4">
                   <!-- <h3 align="center">Cooks</h3> -->
                   <div class="container">
                   <img src="images/cook.jpeg" class="img-fluid" style="height:250px; padding-left: 80px;">
                   <div class="overlay">
                    <div class="text">COOKS</div>
                   </div>
                   </div>
              </div>
               </div>
         </div>
    </div>
@endsection