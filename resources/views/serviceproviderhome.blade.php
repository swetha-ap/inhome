@extends('serviceprovidermaster')
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
  color: #0e0808;
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
              <h1 align="center" style="color: antiquewhite;">WELCOME PROVIDER</h1>
              <br /><br />
              <button type="button" class="btn btn-outline-light" style="margin-left: 50px;">New Bookings</button>
              <button type="button" class="btn btn-outline-light" style="margin-left: 50px;">Pending</button>
            </div>
            <div class="col-4"></div>
            <div class="col-2">
              <img src="{{ asset('images/user1.png') }}" class="img img-fluid" >
            </div>
            <!-- </div> -->
            <!-- <div class="row"> -->
            <!-- <div class="col-5"></div>
            <div class="col-2">
              <h3>Your Bookings : <input type="text"></h3>
            </div> -->
      </div>
 </div>

@endsection