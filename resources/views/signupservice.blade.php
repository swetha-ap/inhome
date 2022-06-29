@extends('master')
@section('content')
<script type="text/javascript" src="{{ asset ('js/jsfunctions.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
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
        <div class="col" style="height: 50px;"></div>
    </div>
    <div class="row  d-flex justify-content-center align-items-center ">
        <div class="col">
            <h1 style="font-family: cursive; color: rgb(160, 10, 98);" align="center">BE THE SERVICE PROVIDER</h1>
        </div>
    </div>
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-12">
                    <div class="row">
                        <div class="col" style="height: 110px;"></div>
                    </div>
                <div class="row">
                    <div class="col-6">
                        <form name="form1" id="f1" onsubmit="return validation()">
                            <div class="form-group  row  ">
                                <div class="col-2"></div>
                                <label for="spfname" class="col-3 col-form-label">First Name</label>
                                <input type="text" class="form-control col-5" name="spfn" id="spfname" placeholder="First name">
                                <label id="l13"></label>
                            </div>
                            <div class="form-group  row  ">
                                <div class="col-2"></div>
                                <label for="splname" class="col-3 col-form-label">Last Name</label>
                                <input type="text" class="form-control col-5" name="spln" id="splname" placeholder="Last name">
                                <label id="l14"></label>
                            </div>
                            <div class="form-group  row  ">
                                <div class="col-2"></div>
                                <div class="col-2">
                                    <h6>Gender</h6>
                                </div>
                                <div class="col-1"></div>
                                <div class="col-6">
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
                                    <label id="l15"></label>
                                </div>
                            </div>
                            <div class="form-group  row  ">
                                <div class="col-2"></div>
                                <label for="spemail" class="col-3 col-form-label">Email ID</label>
                                <input type="email" class="form-control col-5" id="spemail"
                                    name="spmail" placeholder="Enter Email Address">
                                <label id="l16"></label>
                            </div>
                            <div class="form-group  row  ">
                                <div class="col-2"></div>
                                <label for="spmobile" class="col-3 col-form-label">Mobile No.</label>
                                <input type="text" class="form-control col-5" id="spmobile" name="spmob">
                                <label id="l17"></label>
                            </div>
                            <div class="form-group  row  ">
                                <div class="col-2"></div>
                                <label for="spaddress" class="col-3 col-form-label">Address</label>
                                <input type="textarea" class="form-control col-5" id="spaddress" name="spaddr">
                                <label id="l18"></label>
                            </div>
                            <div class="form-group row">
                                <div class="col-2"></div>
                                <div class="col-5">
                                    <select class="form-control custom-select " id="spstate" name="spstate">
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
                                    <label id="l19"></label>
                                </div>
                                <div class="col-3">
                                    <select class="form-control custom-select " id="spcity" name="spcity">
                                        <option value="City">City</option>
                                    </select>
                                    <label id="l20"></label>
                                </div>
                            </div>
                            <div class="form-group  row  ">
                                <div class="col-2"></div>
                                <label for="sppincode" class="col-2 col-form-label">Pincode</label>
                                <input type="text" class="form-control col-5" id="sppincode" name="sppin">
                                <label id="l21"></label>
                            </div>


                        </form>
                    </div>
                    <div class="col-6">
                        <form>

                            <div class="form-group  row  ">

                                <label for="spservice" class="col-3 col-form-label">Select your Service</label>
                                <select class="form-control custom-select col-5" id="spservice" required size="1" name="spservice">
                                    <option selected>Choose...</option>
                                    <option value="Maid">Maid</option>
                                    <option value="Babysitter">Babysitter</option>
                                    <option value="Cook">Cook</option>
                                </select>
                                <label id="l22"></label>
                            </div>
                            <div class="form-group  row  ">

                                <label for="spexp" class="col-3 col-form-label">Experience</label>
                                <input type="number" class="form-control col-5" id="spexp" name="spexpe">
                                <label id="l23"></label>
                            </div>
                            <div class="form-group  row  ">

                                <label for="spcharge" class="col-3 col-form-label">Service Charge</label>
                                <input type="number" class="form-control col-5" id="spcharge" name="spchg">
                                <label id="l24"></label>
                            </div>
                            <div class="form-group  row  ">

                                <label for="sppassword" class="col-3 col-form-label">Password</label>
                                <input type="password" class="form-control col-5" id="sppassword" name="sppwd">
                                <label id="l25"></label>
                            </div>
                            <div class="form-group  row  ">

                                <label for="sppassword" class="col-3 col-form-label">Confirm Password</label>
                                <input type="password" class="form-control col-5" id="sppassword1" name="sppwd1">
                                <label id="l26"></label>
                            </div>
                            <div class="form-group  row  ">

                                <label for="spid" class="col-3 col-form-label">ID Proof</label>
                                <select class="form-control custom-select col-2" id="spid" name="spids">
                                    <option selected>Choose...</option>
                                    <option value="1">Aadhar</option>
                                    <option value="2">Pan card</option>
                                </select>
                                <label id="l27"></label>
                                <input type="file" class="form-control col-3" id="spidupload">
                            </div>
                            <button type="submit" class="btn btn-lg" style="color:antiquewhite;background-color:rgb(63, 12, 12) ;"
                                data-mdb-ripple-color="dark">Register</button>
                        </form>
                    </div>
                </div>
                </div>
                <div class="progress">
                    <div class="progress-bar " role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </div>
    @endsection