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
    .container{
       position: relative;
       left: 250px;
       top: 50px;
    }
    .cardsh {
        box-shadow: 0 15px 25px rgba(232, 102, 102, 0.2);
        border: 2px solid white;      
        border-radius: 5px;
        backdrop-filter: blur(14px);
        background-color: rgba(212, 110, 110, 0.2);
    }

    .input-icons i {
        position: absolute;
    }

    .input-icons {
        width: 100%;
        margin-bottom: 10px;
    }

    .icon {
        padding: 10px;
        min-width: 40px;
        color: black;
    }

    .input-field {
        width: 100%;
        padding: 10px;
        text-align: center;
    }
</style>
<div class="container-fluid" style="height: 1500px;">
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
            <div class="container content">
                <div class="row">
                    <div style="height: 100px;" class="col"></div>
                </div>
                <div class="row d-flex justify-content-center align-items-center  ">
                    <div class="col-1"></div>
                    <div class="col col-xl-10">
            
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-2"></div>
                            <div class="col-6 d-none d-md-block" style="height:250px ;">
                                <img src="images/user2.png" class=" img-fluid"
                                    style="  height:200px; opacity:1; border-radius: 1rem 1rem 1rem 1rem;">
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-2"></div>
                            <div class="card-body">
            
                                <div class="col-8">
                                    <form>
            
                                        <h4 align="center" style="color: white;">Log in to your Account</h4><br />
                                        <!-- <div class="form-group form-outline  ">
                                                <label for="clientemail">Email address</label>
                                            </div> -->
                                        <div class="input-icons">
                                            <i class="fa fa-user icon"></i>
                                            <input type="email" class="form-control input-field input-lg" id="clientemail"
                                                placeholder="Enter Email">
                                        </div>
                                        <!-- <div class="form-group form-outline">
                                                <label for="clientpassword">Password</label>
                                            </div> -->
                                        <div class="input-icons">
                                            <i class="fa fa-key icon"> </i>
                                            <input type="password" class="form-control input-lg input-field" id="clientpassword"
                                                placeholder="Enter Password">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary  btn-block">Log In</button>
                                        </div>
            
                                        <!-- <div>
                                            <a style="color: white;" class="small " href="">Forgot password?</a>
                                            <p style="color: white;">Dont have an account? <a style="color: white;"
                                                    href="">SignUp</a></p>
                                        </div> -->
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-2">
                            <a style="color: white;" class="small " href="">Forgot password?</a></div>
                            <div class="col"></div>
                            <div class="col-4">
                            <p style="color: white;">Dont have an account? <a style="color: white;"
                                    href="{{ route ('signupcustomer') }}">SignUp</a></p></div>
                        </div>
                    </div>
            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection