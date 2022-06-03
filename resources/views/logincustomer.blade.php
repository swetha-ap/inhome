@extends('master')
@section('content')
<style>
    .bgcolor{
        background-image: linear-gradient(to bottom right,rgb(32, 32, 83) ,rgb(99, 99, 173),green);
    }
</style>
<section class="vh-100 bgcolor" >
<div  class="container" style="height: 500px;">
   
    <div class="row" height="200px">
        <div class="col"><br /></div>
    </div>
    <div class="row justify-content-center align-items-center ">
        <div class="col-2"></div>
       <div class="col">
           <div class="card" style="width: 800px;">
               <div class="row justify-content-center align-items-center">
                   <div class="col-3" style="height:200px ;">
                    <img src="images/c1.jfif" class="card-img-top img-fluid" style="height: 200px;">
                   </div>
                   <div class="col-2"></div>
                       <div class="card-body">
                           
                        <div class="col-6">
                            <form>
                                <h3>IN HOME</h3>
                                <br/>
                                <h5>Log in to your Account</h5><br />
                                <div class="form-group form-outline">
                                    <label for="clientemail">Email address</label>
                                    <input type="email" class="form-control" id="clientemail">
                                </div>
                                <div class="form-group form-outline">
                                    <label for="clientpassword">Password</label>
                                    <input type="password" class="form-control" id="clientpassword">
                                </div>
                                <div class="form-group">
                                <button type="submit" class="btn btn-primary">Log In</button>
                                </div>
                                <a class="small text-muted" href="">Forgot password?</a>
                                <p>Dont have an account? <a href="">Sign Up</a></p>
                            </form>
                        </div>
                       </div>
                   </div>
               </div>
              
           </div>
       </div>
    </div>
   </section>
@endsection