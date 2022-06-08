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

    .chbg {
        background-image: url('{{ asset("images/chbg.webp") }}');
        /* width:100%;
    height: 100%;
    background-repeat: no-repeat; */
    }

    .img,
    h1 {
        padding-top: 50px;
    }
</style>
<div class="container-fluid chbg" style="height: 800px;">
    <div class="row">
        <div class="col"></div>
    </div>
    <div class="row " style="height: 600px;">
        <div class="col-1">
            <div class="sidenav">
                <a href="">Home</a>
                <a href="">My Profile</a>
                <a href="">Book Now</a>
                <a href="">Log Out</a>
                <a href="">Help?</a>
            </div>
        </div>
        <div class="col-4"></div>
        <div class="col-5">
            <h1>BOOK NOW</h1>
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col-4">
                            <label class="form-group" for="reqservice">Enter Preferred Service</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <select class="form-control" id="reqservice">
                                <option value="Select">Select</option>
                                <option value="Maid">Maid</option>
                                <option value="Babysitter">Babysitter</option>
                                <option value="Cook">Cook</option>
                            </select>
                        </div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="col-4">
                            <label class="form-group" for="reqstate">Enter State</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <select class="form-control" id="reqstate">
                                <option value="Select">Select</option>

                            </select>
                        </div>
                    </div><br />
                    <div class="row">
                        <div class="col-4">
                            <label class="form-group" for="reqcity">Enter City</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <select class="form-control" id="reqcity">
                                <option value="Select">Select</option>
                            </select>
                        </div>
                    </div><br />
                    <div class="row">
                        <div class="col-4">
                            <label class="form-group" for="reqfee">Enter Preferred Cost</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <input type="range" id="reqfee">
                        </div>
                    </div><br />
                    <div class="row">

                        <button type="button" class="btn btn-lg btn-primary col-3"
                            data-mdb-ripple-color="dark">Search</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-2">
            <img src="{{ asset('images/user1.png') }}" class="img img-fluid">
        </div>




    </div>
</div>

@endsection