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
     input[type="text"]
{
    background: transparent;
    border: 1px solid whitesmoke;
    
}
::-ms-input-placeholder {
 color: blue;
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
               
               <div class="content">
                    <h1 align="center">Quality Services , A Click Away</h1>
                    <form>
                         <div class="form-group row">
                            <div class="col-4"></div>
                            <input type="text" class="form-control col-3" placeholder="Enter your Area">
                            <button type="button" class="btn  btn-primary col-1"
                            data-mdb-ripple-color="dark">Search</button>
                         </div>
                    </form>
               </div>
          </div>
     </div>

</div>



@endsection