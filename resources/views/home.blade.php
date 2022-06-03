@extends('master')
@section('content')
<style>
     .parent {
height: 500px;
display: flex;
align-items: center;
justify-content: center;
/* background-color:   #BFC9CA ; */
}
</style>
    <div class="container-fluid">
         <div class="row">
           
            <div class="col-12" style="width:1300px; height: 600px;">
               <img src="{{ asset('images/banner.png') }}" style="height: 600px; width: 100%">
            </div>
         </div>
         
    </div>    
    <div id="1" class="parent container-fluid">
         <div class="row">
              <div class="col-3">
        <a href="" align="center" style="font-size: 40px; text-decoration: none">Quality Services, A Click Away</a>
        </div>
        <div class="col-3" style="display:inline-block; padding-left: 50px;" >
             <h2 align="center">Maids</h2> 
             <img style="padding-left:65px;" src="images/clean.jpg" height="200px" width="250px">
        </div>
        <div class="col-3" style="display:inline-block; padding-left: 50px;">
            <h2 align="center" V>Babysitters</h2> 
            <img style="padding-left:65px;" src="images/nanny.png" height="200px" width="250px">
       </div>
       <div class="col-3" style="display:inline-block; padding-left: 50px;">
        <h2 align="center">Cooks</h2> 
        <img style="padding-left:65px;" src="images/cooking.jpg" height="200px" width="250px">
        </div>
   </div>
    </div>
@endsection