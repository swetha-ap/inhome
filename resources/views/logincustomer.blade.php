@extends('master')
@section('content')
<style>
    #bg1{
        height: 700px;
        background-image: linear-gradient(to bottom right, rgb(53, 31, 67) , rgb(96, 92, 96), rgb(143, 229, 190));
        /* background-image: linear-gradient(to bottom left,  rgb(143, 229, 190)); */
    }
</style>
<div id="bg1" class="container" >
    <div class="row">
        <div class="col-12" style="height:200px ;" ></div>
    </div>
    <div class="row">
      <div class="mx-auto" >
        <h4 style="color: white ;">CUSTOMER LOGIN</h4></div>
    </div>
    <div class="row">
        <div class="col-4"></div>
        <div class="col-1">
            <img src="{{ asset ('images/user.png') }}" class="img-fluid ">
        </div>
        <div class="col-3">
        <form>
            <input type="text" placeholder="Username" id="">
        </form>
        </div>
        
    </div>
    <div class="row">
      <div class="col-4"></div>
      <div class="col-1">
            <img src="{{ asset ('images/password.png') }}" class="img-fluid mx-auto d-block ">
      </div>
      <div class="col-3">
            <form>
            <input type="password" placeholder="Password" id="">
        </form>
      </div>
       
    </div>
            
</div>
@endsection