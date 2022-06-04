@extends('master')
@section('content')
<style>
    .bgcolor {
        background-image: linear-gradient(to bottom right, rgb(30, 8, 140), rgb(43, 39, 114), rgb(166, 58, 58), rgb(240, 7, 54));
    }

    .cardsh {
        box-shadow: 0 15px 25px rgba(232, 102, 102, 0.2);
        /* border: 2px solid white;       */
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
    }

    .input-field {
        width: 100%;
        padding: 10px;
        text-align: center;
    }
</style>
<div class="container bgcolor" style="height: 700px;">

    <div class="row">
        <div style="height: 100px;" class="col"></div>
    </div>
    <div class="row d-flex justify-content-center align-items-center  ">
        <div class="col-1"></div>
        <div class="col col-xl-10">

            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-2"></div>
                <div class="col-6 d-none d-md-block" style="height:250px ;">
                    <img src="images/log.png" class=" img-fluid"
                        style="  height:200px; opacity:0.5; border-radius: 1rem 1rem 1rem 1rem;">
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
                        href="">SignUp</a></p></div>
            </div>
        </div>

    </div>
</div>

@endsection