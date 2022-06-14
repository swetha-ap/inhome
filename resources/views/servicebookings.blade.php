@extends('master')
@section('content')
 <style>
  .sidenav {
  height: 100%;
  width: 160px;
  position: absolute;
  z-index: 1;
  top: 0;
  left: 0;
  /* background-color: #111; */
  overflow-x: hidden;
  padding-top: 20px;
  opacity: 0.8;
}

.sidenav a {
  padding: 32px 16px 16px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #332604;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}
.chbg{
    background-image: url('{{ asset("images/sp.jpg") }}');
    /* width:100%;
    height: 100%;
    background-repeat: no-repeat; */
}
.img , h1{
  padding-top: 50px;
}
</style>
 <div class="container-fluid chbg" style="height: 800px;">
    <div class="row" >
        <div class="col" ></div>
    </div>
      <div class="row " style="height: 600px;">
          <div class="col-1" >
            <div class="sidenav">
                <a href="">Home</a>
                <a href="">My Profile</a>
                <a href="">My Bookings</a>
                <a href="">Log Out</a>
                <a href="">Help?</a>
            </div>
          </div>
          <div class="col-1"></div>
            <div class="col-4">
              <h1 style="color:antiquewhite">My Bookings</h1><br /><br />
              
              <br /><br /><br /><br />
              <table class="table table-dark" style="width:900px;">
                <thead>
                  <tr>
                    <td align="center">SL NO</td>
                    <td colspan="5" align="center">Bookings</td>
                    <td colspan="2" align="center">Status</td>
                    <td colspan="2" align="center">Action</td>
                  </tr>
                 </thead>
                 <tbody>
                   <tr>
                     <td align="center">1</td>
                     <td colspan="5" align="center">Lorem.</td>
                     <td  colspan="2" align="center">DONE</td>
                   </tr>
                   <tr>
                     <td align="center">2</td>
                     <td colspan="5" align="center">Lorem.</td>
                     <td  colspan="2" align="center">PENDING</td>
                   </tr>
                   <tr>
                     <td align="center">3</td>
                     <td colspan="5" align="center">Lorem.</td>
                     <td  colspan="2" align="center">CANCELLED</td>
                   </tr>
                 </tbody>
              </table>
            
           
           </div>
           <div class="col-4"></div>
           <div class="col-2">
             <img src="{{ asset('images/user1.png') }}" class="img img-fluid" >
           </div>
        </div>
    </div>
   
   @endsection