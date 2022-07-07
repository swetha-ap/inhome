@extends('master')
@section('content')
<script type="text/javascript" src="{{ asset ('js/validations.js') }}"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>
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
    label,
    h6 {
        font-family: cursive;
        color: rgb(218, 205, 218)
    }
    form .error{
         color: red;
         font-weight: bold;
         font-family: Arial, Helvetica, sans-serif;
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

            <div class="content">
                <div class="row">
                    <div class="col" style="height: 30px;"></div>
                </div>
                <div class="row  d-flex justify-content-center align-items-center ">
                    <div class="col">
                        <h1 style="font-family: cursive; color: rgb(238, 218, 230);" align="center">Welcome User</h1>
                    </div>
                </div>
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-12">
                        <div class="row">
                            <div class="col" style="height: 70px;"></div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <form  id="customersignup">
                                    <div class="form-group  row  ">
                                        <div class="col-4"></div>
                                        <label for="cfname" class="col-2 col-form-label">First Name</label>
                                        <input type="text" class="form-control  col-3" id="cfname" name="cufname"
                                            placeholder="First name">
                                    </div>
                                    <div class="form-group  row  ">
                                        <div class="col-4"></div>
                                        <label for="clname" class="col-2 col-form-label">Last Name</label>
                                        <input type="text" class="form-control col-3" id="clname" name="culname"
                                            placeholder="Last name">
                                    </div>
                                    <div class="form-group  row  ">
                                        <div class="col-4"></div>
                                        <div class="col-2">
                                            <h6>Gender</h6>
                                        </div>
                                        <div class="col-2">
                                            <div class="form-check form-check-inline mb-0 me-4">
                                                <input class="form-check-input" type="radio" name="gender"
                                                    id="femaleGender" value="option1" />
                                                <label class="form-check-label" for="femaleGender">Female</label>
                                            </div>

                                            <div class="form-check form-check-inline mb-0 me-4">
                                                <input class="form-check-input" type="radio" name="gender"
                                                    id="maleGender" value="option2" />
                                                <label class="form-check-label" for="maleGender">Male</label>
                                            </div>

                                            <div class="form-check form-check-inline mb-0">
                                                <input class="form-check-input" type="radio" name="gender"
                                                    id="otherGender" value="option3" />
                                                <label class="form-check-label" for="otherGender">Other</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group  row  ">
                                        <div class="col-4"></div>
                                        <label for="cemail" class="col-2 col-form-label">Email ID</label>
                                        <input type="email" class="form-control col-3" id="cemail" name="cuemail"
                                            placeholder="Enter Email Address">
                                    </div>
                                    <div class="form-group  row  ">
                                        <div class="col-4"></div>
                                        <label for="cmobile" class="col-2 col-form-label">Mobile No.</label>
                                        <input type="text" class="form-control col-3" id="cmobile" name="cumobile">
                                    </div>
                                    <div class="form-group  row  ">
                                        <div class="col-4"></div>
                                        <label for="caddress" class="col-2 col-form-label">Address</label>
                                        <textarea id="caddress" 
                                        name="cuaddress"  rows="3" cols="41"></textarea>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-4"></div>
                                        <div class="col-3">
                                            <select class="form-control custom-select " id="cstate" name="custate">
                                                <option value="">State</option>
                                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands
                                                </option>
                                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                <option value="Assam">Assam</option>
                                                <option value="Bihar">Bihar</option>
                                                <option value="Chandigarh">Chandigarh</option>
                                                <option value="Chhattisgarh">Chhattisgarh</option>
                                                <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                                <option value="Daman and Diu">Daman and Diu</option>
                                                <option value="Delhi">Delhi</option>
                                                <option value="Lakshadweep">Lakshadweep</option>
                                                <option value="Puducherry">Puducherry</option>
                                                <option value="Goa">Goa</option>
                                                <option value="Gujarat">Gujarat</option>
                                                <option value="Haryana">Haryana</option>
                                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                <option value="Jharkhand">Jharkhand</option>
                                                <option value="Karnataka">Karnataka</option>
                                                <option value="Kerala">Kerala</option>
                                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                <option value="Maharashtra">Maharashtra</option>
                                                <option value="Manipur">Manipur</option>
                                                <option value="Meghalaya">Meghalaya</option>
                                                <option value="Mizoram">Mizoram</option>
                                                <option value="Nagaland">Nagaland</option>
                                                <option value="Odisha">Odisha</option>
                                                <option value="Punjab">Punjab</option>
                                                <option value="Rajasthan">Rajasthan</option>
                                                <option value="Sikkim">Sikkim</option>
                                                <option value="Tamil Nadu">Tamil Nadu</option>
                                                <option value="Telangana">Telangana</option>
                                                <option value="Tripura">Tripura</option>
                                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                <option value="Uttarakhand">Uttarakhand</option>
                                                <option value="West Bengal">West Bengal</option>
                                            </select>
                                        </div>
                                        <div class="col-2">
                                            <select class="form-control custom-select " id="ccity" name="cucity">
                                                
                                                <option value="">City</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group  row  ">
                                        <div class="col-4"></div>
                                        <label for="cpincode" class="col-2 col-form-label">Pincode</label>
                                        <input type="text" class="form-control col-2" id="cpincode" name="cupincode">
                                    </div>
                                    <div class="form-group  row  ">
                                        <div class="col-4"></div>
                                        <label for="cid" class="col-2 col-form-label">ID Proof</label>
                                        <select class="form-control custom-select col-3" id="cid" name="cuid">
                                            <option value="">Choose...</option>
                                            <option value="1">Aadhar</option>
                                            <option value="2">Pan card</option>
                                        </select>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-6"></div>
                                        <input type="file" class="form-control col-3" id="cidupload" name="cupload">
                                    </div>
                                    <div class="form-group  row  ">
                                        <div class="col-4"></div>
                                        <label for="cpassword" class="col-2 col-form-label">Password</label>
                                        <input type="password" class="form-control col-3" id="cspassword"
                                            name="cupassword">
                                    </div>
                                    <div class="form-group  row  ">
                                        <div class="col-4"></div>
                                        <label for="cspassword1" class="col-2 col-form-label">Confirm Password</label>
                                        <input type="password" class="form-control col-3" id="cspassword1"
                                            name="cupassword1">
                                    </div>
                                    <div class="row">
                                        <div class="col-5"></div>
                                        <button type="submit" class="btn btn-lg btn-primary col-2"
                                           
                                            data-mdb-ripple-color="dark" id="csubmit">Register</button>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    jQuery.validator.addMethod("lettersonly", function(value, element) {
    return this.optional(element) || /^[a-z]+$/i.test(value);
    }); 
    
    // Password with spl char
    $.validator.addMethod('mypassword', function(value, element) {
        return this.optional(element) || (value.match(/[a-zA-Z]/) && value.match(/[0-9]/) && value.match(/[@#!_$]/));
    },
    'Password must contain at least one numeric,one alphabetic,one special character(@ # ! _ $');

</script>
@endsection