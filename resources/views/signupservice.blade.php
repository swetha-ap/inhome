@extends('master')
@section('content')
<style>
    .content {
  position: flex; /* Position the background text */
  /* bottom: 0; At the bottom. Use top:0 to append it to the top */
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1; /* Grey text */
  /* width: 100%; Full width */
  /* padding: 20px; Some padding */
}

</style>
 <div class="container" style=" background-image: url('images/bgr.jfif'); height:1000px;">
     <div class="row">
         <div class="col" style="height: 100px;"></div>
     </div>    
     <div class="row  d-flex justify-content-center align-items-center ">
         <div class="col">
             <h1 style="color: white;" align="center">BE THE SERVICE PROVIDER</h1></div>
     </div>    
     <div class="row d-flex justify-content-center align-items-center">
         <div class="col-12">
        <div class="content" style="border-radius: 15px;">
         <!-- <div class="card-body  "> -->
             <div class="row">
             <div class="col-6">
                 <form>
                    <div class="form-group  row  ">
                        <div class="col-2"></div>
                        <label for="spfname" class="col-2 col-form-label">First Name</label>
                        <input type="text" class="form-control col-5" id="spfname" placeholder="First name">
                    </div>
                    <div class="form-group  row  ">
                        <div class="col-2"></div>
                        <label for="splname" class="col-2 col-form-label">Last Name</label>
                        <input type="text" class="form-control col-5" id="splname" placeholder="Last name">
                    </div>
                    <div class="form-group  row  ">
                        <div class="col-2"></div>
                        <div class="col-2">
                        <h6>Gender</h6></div>
                        <div class="col-5">
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
                        <label for="spemail" class="col-2 col-form-label">Email ID</label>
                        <input type="email" class="form-control col-5" id="spemail" placeholder="Enter Email Address">
                    </div>
                    <div class="form-group  row  ">
                        <div class="col-2"></div>
                        <label for="spmobile" class="col-2 col-form-label">Mobile No.</label>
                        <input type="text" class="form-control col-5" id="spmobile">
                    </div>
                    <div class="form-group  row  ">
                        <div class="col-2"></div>
                        <label for="spaddress" class="col-2 col-form-label">Address</label>
                        <input type="textarea" class="form-control col-5" id="spaddress" >
                    </div>
                    <div class="form-group row">
                        <div class="col-2"></div>
                        <div class="col-4">
                        <select class="form-control custom-select " id="spstate"  required>
                            <option value="State">State</option>
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
                            <select class="form-control custom-select " id="spcity"  required>
                                <option value="City">City</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group  row  ">
                        <div class="col-2"></div>
                        <label for="sppincode" class="col-2 col-form-label">Pincode</label>
                        <input type="text" class="form-control col-5" id="sppincode" >
                    </div>
                    

                 </form>
             </div>
            <div class="col-6">
                <form>
                    
                    <div class="form-group  row  ">
                       
                        <label for="spservice" class="col-3 col-form-label">Select your Service</label>
                        <select class="form-control custom-select col-5" id="spservice"  required size="1">
                            <option selected>Choose...</option>
                            <option value="1">Maid</option>
                            <option value="2">Babysitter</option>
                            <option value="3">Cook</option>
                        </select>
                    </div>
                    <div class="form-group  row  ">
                      
                        <label for="spexp" class="col-3 col-form-label">Experience</label>
                        <input type="number" class="form-control col-5" id="spexp" >
                    </div>
                    <div class="form-group  row  ">
                      
                        <label for="spcharge" class="col-3 col-form-label">Service Charge</label>
                        <input type="number" class="form-control col-5" id="spcharge" >
                    </div>
                    <div class="form-group  row  ">
                        
                        <label for="sppassword" class="col-3 col-form-label">Password</label>
                        <input type="password" class="form-control col-5" id="sppassword" >
                    </div>
                    <div class="form-group  row  ">
                        
                        <label for="sppassword" class="col-3 col-form-label">Confirm Password</label>
                        <input type="password" class="form-control col-5" id="sppassword" >
                    </div>
                    <div class="form-group  row  ">
                        
                        <label for="spid" class="col-3 col-form-label">ID Proof</label>
                        <select class="form-control custom-select col-3" id="spid"  required>
                            <option selected>Choose...</option>
                            <option value="1">Aadhar</option>
                            <option value="2">Pan card</option>
                        </select>
                        <input type="file" class="form-control col-5" id="spidupload" >
                    </div>
                    <button type="button" class="btn btn-primary btn-lg"
                    data-mdb-ripple-color="dark">Register</button>
                </form>
            </div>
         </div>
     <!-- </div> -->
    </div>
  </div>
</div>
@endsection