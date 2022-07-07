@extends('master')
@section('content')
<script type="text/javascript" src="{{ asset ('js/validations.js') }}"></script>
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
            <div class="content" style="height: 900px;">
                <div class="row">
                    <div class="col" style="height: 50px;"></div>
                </div>
                <br><br>
                <div class="row  d-flex justify-content-center align-items-center ">
                    <div class="col">
                        <h1 style="font-family: cursive; color: rgb(245, 220, 235);" align="center">BE THE SERVICE PROVIDER</h1>
                    </div>
                </div>
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-12">
                        <div class="row">
                                    <div class="col" style="height: 110px;"></div>
                        </div>
                        <form id="spsignup" >
                            <div class="row">
                                <div class="col-6">
                                    
                                        <div class="form-group  row  ">
                                            <div class="col-2"></div>
                                            <label for="spfname" class="col-3 col-form-label">First Name</label>
                                            <input type="text" class="form-control col-5" name="spfn" id="spfname" placeholder="First name">
                                        </div>
                                        <div class="form-group  row  ">
                                            <div class="col-2"></div>
                                            <label for="splname" class="col-3 col-form-label">Last Name</label>
                                            <input type="text" class="form-control col-5" name="spln" id="splname" placeholder="Last name">
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
                                            </div>
                                        </div>
                                        <div class="form-group  row  ">
                                            <div class="col-2"></div>
                                            <label for="spemail" class="col-3 col-form-label">Email ID</label>
                                            <input type="email" class="form-control col-5" id="spemail"
                                                name="spmail" placeholder="Enter Email Address">
                                        </div>
                                        <div class="form-group  row  ">
                                            <div class="col-2"></div>
                                            <label for="spmobile" class="col-3 col-form-label">Mobile No.</label>
                                            <input type="text" class="form-control col-5" id="spmobile" name="spmob">
                                        </div>
                                        <div class="form-group  row  ">
                                            <div class="col-2"></div>
                                            <label for="spaddress" class="col-3 col-form-label">Address</label>
                                            <textarea id="spaddress" name="spaddr" cols="34" rows="3"></textarea>
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
                                            </div>
                                            <div class="col-3">
                                                <select class="form-control custom-select " id="spcity" name="spcitys">
                                                    <option value="">City</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group  row  ">
                                            <div class="col-2"></div>
                                            <label for="sppincode" class="col-2 col-form-label">Pincode</label>
                                            <input type="text" class="form-control col-5" id="sppincode" name="sppin">
                                        </div>
            
            
                                    
                                </div>
                                <div class="col-6">
                                    
            
                                        <div class="form-group  row  ">
            
                                            <label for="spservice" class="col-3 col-form-label">Select your Service</label>
                                            <select class="form-control custom-select col-5" id="spservice" name="spservices">
                                                <option value="">Choose...</option>
                                                <option value="Maid">Maid</option>
                                                <option value="Babysitter">Babysitter</option>
                                                <option value="Cook">Cook</option>
                                            </select>
                                        </div>
                                        <div class="form-group  row  ">
            
                                            <label for="spexp" class="col-3 col-form-label">Experience</label>
                                            <input type="number" class="form-control col-5" id="spexp" name="spexpe">
                                        </div>
                                        <div class="form-group  row  ">
            
                                            <label for="spcharge" class="col-3 col-form-label">Service Charge</label>
                                            <input type="number" class="form-control col-5" id="spcharge" name="spchg">
                                        </div>
                                        <div class="form-group  row  ">
            
                                            <label for="sppassword" class="col-3 col-form-label">Password</label>
                                            <input type="password" class="form-control col-5" id="sppassword" name="sppwd">
                                        </div>
                                        <div class="form-group  row  ">
            
                                            <label for="sppassword" class="col-3 col-form-label">Confirm Password</label>
                                            <input type="password" class="form-control col-5" id="sppassword1" name="sppwd1">
                                        </div>
                                        <div class="form-group  row  ">
            
                                            <label for="spid" class="col-3 col-form-label">ID Proof</label>
                                            <select class="form-control custom-select col-5" id="spid" name="spids">
                                                <option value="">Choose...</option>
                                                <option value="Aadhar">Aadhar</option>
                                                <option value="pancard">Pan card</option>
                                            </select>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-3"></div>
                                            <input type="file" class="form-control col-5" id="spidupload" name="spupload">
                                        </div>
                                        <button type="submit" id="spsubmit" class="btn btn-primary btn-lg" 
                                            data-mdb-ripple-color="dark" >Register</button>
                                    
                                </div>
                            </div>
                        </form>
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