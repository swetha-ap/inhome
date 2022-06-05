@extends('master')
@section('content')
<style>
     .container-fluid .content {
          position: absolute;
          /* Position the background text */
          top: 0;
          /* At the bottom. Use top:0 to append it to the top */
          background: rgb(0, 0, 0);
          /* Fallback color */
          background: rgba(0, 0, 0, 0.5);
          /* Black background with 0.5 opacity */
          color: #f1f1f1;
          /* Grey text */
          width: 98%;
          /* Full width */
          padding: 20px;
          /* Some padding */
     }
</style>
<div class="container-fluid" style="height: 1000px;">
     <div class="row"></div>
     <div class="col" style="height: 10px;"></div>
     <div class="row">

          <div class="col-12" style="width:100%; height: 500px;">
               <div id="backgroundcarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                         <div class="carousel-item active">
                              <img src="images/maid.jpg" class="d-block w-100" alt="...">
                         </div>
                         <div class="carousel-item">
                              <img src="images/bs.jpg" class="d-block w-100" alt="...">
                         </div>
                         <div class="carousel-item">
                              <img src="images/cook.jpeg" class="d-block w-100" alt="...">
                         </div>
                    </div>
               </div>
               <!-- <img src="{{ asset('images/banner.png') }}" style="height: 100%; width: 100%"> -->
               <div class="content">
                    <h1 align="center">Quality Services , A Click Away</h1>
               </div>
          </div>
     </div>

</div>



@endsection