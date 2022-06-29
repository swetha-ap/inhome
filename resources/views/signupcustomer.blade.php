@extends('master')
@section('content')
<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
      crossorigin="anonymous"
    />
    <script type="text/javascript" src="{{ asset ('js/jsfunctions.js') }}"></script>
<style>
    label,h6{
        font-family: cursive;
        color:firebrick
    }

input:focus {
  border: 2px solid #f2796e;
}

</style>
<div class="container-fluid" style=" background-image: url('images/ss.png'); height: 1000px;">
    <div class="row">
        <div class="col" style="height: 30px;"></div>
    </div>
    <div class="row  d-flex justify-content-center align-items-center ">
        <div class="col">
            <h1 style="font-family: cursive; color: rgb(160, 10, 98);" align="center">Welcome User</h1>
        </div>
    </div>
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-12">
                    <div class="row">
                        <div class="col" style="height: 70px;"></div>
                    </div>
                <div class="row">
                    <div class="col">
                        <form name="form" id="form1" onsubmit="return validate()" >
                            <div class="form-group  row  ">
                                <div class="col-4"></div>
                                <label for="cfname" class="col-2 col-form-label">First Name</label>
                                <input type="text" class="form-control col-3" id="cfname" name="cufname" placeholder="First name">
                                <label id="1"></label>
                            </div>
                            <div class="form-group  row  ">
                                <div class="col-4"></div>
                                <label for="clname" class="col-2 col-form-label">Last Name</label>
                                <input type="text" class="form-control col-3" id="clname" name="culname" placeholder="Last name">
                                <label id="2"></label>
                            </div>
                            <div class="form-group  row  ">
                                <div class="col-4"></div>
                                <div class="col-2">
                                    <h6>Gender</h6>
                                </div>
                                <div class="col-2">
                                    <div class="form-check form-check-inline mb-0 me-4">
                                        <input class="form-check-input" type="radio" name="gender" id="femaleGender"
                                            value="option1" />
                                        <label class="form-check-label" for="femaleGender">Female</label>
                                    </div>

                                    <div class="form-check form-check-inline mb-0 me-4">
                                        <input class="form-check-input" type="radio" name="gender" id="maleGender"
                                            value="option2" />
                                        <label class="form-check-label" for="maleGender">Male</label>
                                    </div>

                                    <div class="form-check form-check-inline mb-0">
                                        <input class="form-check-input" type="radio" name="gender" id="otherGender"
                                            value="option3" />
                                        <label class="form-check-label" for="otherGender">Other</label>
                                    </div>
                                    <label id="3"></label>
                                </div>
                            </div>
                            <div class="form-group  row  ">
                                <div class="col-4"></div>
                                <label for="cemail" class="col-2 col-form-label">Email ID</label>
                                <input type="email" class="form-control col-3" id="cemail"
                                    name="cuemail" placeholder="Enter Email Address">
                                    <label id="4"></label> 
                            </div>
                            <div class="form-group  row  ">
                                <div class="col-4"></div>
                                <label for="cmobile" class="col-2 col-form-label">Mobile No.</label>
                                <input type="text" class="form-control col-3" id="cmobile" name="cumobile">
                                <label id="5"></label>
                            </div>
                            <div class="form-group  row  ">
                                <div class="col-4"></div>
                                <label for="caddress" class="col-2 col-form-label">Address</label>
                                <input type="textarea" class="form-control col-3" id="caddress" name="cuaddress">
                                <label id="6"></label>
                            </div>
                            <div class="form-group row">
                                <div class="col-4"></div>
                                <div class="col-3">
                                    <select class="form-control custom-select " id="cstate" name="custate" required="">
                                        <option value="">State</option>
                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
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
                                    <label id="7"></label>
                                </div>
                                <div class="col-2">
                                    <select class="form-control custom-select " id="ccity" name="cucity" required>
                                        <option value="City">City</option>
                                    </select>
                                    <label id="8"></label>
                                </div>
                            </div>
                            <div class="form-group  row  ">
                                <div class="col-4"></div>
                                <label for="cpincode" class="col-2 col-form-label">Pincode</label>
                                <input type="text" class="form-control col-2" id="cpincode" name="cupincode">
                                <label id="9"></label>
                            </div>
                            <div class="form-group  row  ">
                                <div class="col-4"></div>
                                <label for="cid" class="col-2 col-form-label">ID Proof</label>
                                <select class="form-control custom-select col-3" id="cid" name="cuid" required="">
                                    <option value="" >Choose...</option>
                                    <option value="1">Aadhar</option>
                                    <option value="2">Pan card</option>
                                </select>
                                <label id="10"></label>
                            </div>
                            <div class="row form-group">
                                <div class="col-6"></div>
                                <input type="file" class="form-control col-3" id="spidupload">
                            </div>
                            <div class="form-group  row  ">
                                <div class="col-4"></div>
                                <label for="cpassword" class="col-2 col-form-label">Password</label>
                                <input type="password" class="form-control col-3" id="cspassword" name="cupassword">
                                <label id="11"></label>
                            </div>
                            <div class="form-group  row  ">
                                <div class="col-4"></div>
                                <label for="cspassword1" class="col-2 col-form-label">Confirm Password</label>
                                <input type="password" class="form-control col-3" id="cspassword1" name="cupassword1">
                                <label id="12"></label>
                            </div>
                            <div class="row">
                                <div class="col-5"></div>
                            <button type="submit" class="btn btn-lg col-2" style="color:antiquewhite;background-color:rgb(63, 12, 12) ;"
                            data-mdb-ripple-color="dark">Register</button>
                            </div>
                           
                        </form>
                        
                    </div>
                </div>
          </div>
    </div> 
    
</div>
<div class="progress">
    <div class="progress-bar " role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
@endsection