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
  color: #5b5454;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}
.chbg{
    background-image: url('{{ asset("images/chbg.webp") }}');
    /* width:100%;
    height: 100%;
    background-repeat: no-repeat; */
}
</style>
 <div class="container-fluid chbg" style="height: 1000px;">
    <div class="row">
        <div class="col" ></div>
    </div>
      <div class="row">
          <div class="col-1" style="height: 1000px;" >
            <div class="sidenav">
                <a href="">Home</a>
                <a href="">My Profile</a>
                <a href="">Book Now</a>
                <a href="">Log Out</a>
                <a href="">Help?</a>
            </div>
          </div>
      </div>
 </div>

@endsection