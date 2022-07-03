@extends('customermaster')
@section('content')
<style>
     .uploadimg {
    cursor: pointer;
    
  }
  
</style>
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" width="150px" src="{{ asset('images/user1.png') }}" >
                <label class="uploadimg" for="file">
                    <span class="fas fa-camera"></span>
                    <span>Change Image</span>
                  </label>
                <input id="file" type="file" class="form-control">
            </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-5">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">First Name</label>
                        <input type="text" class="form-control" placeholder="first name" value=""></div>
                    <div class="col-md-6"><label class="labels">Last Name</label><input type="text" class="form-control"
                            value="" placeholder="last name"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text"
                            class="form-control" placeholder="enter phone number" value=""></div>
                    <div class="col-md-12"><label class="labels">Address </label><input type="textarea"
                            class="form-control" placeholder="enter address" value=""></div><br />
                    <!-- <div class="col-md-12"><label class="labels">Address Line 2</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div> -->
                    <div class="col-md-12"><label class="labels">Pincode</label><input type="text" class="form-control"
                            placeholder="enter pincode" value=""></div><br />
                    <div class="col-md-12"><label class="labels">ID</label>
                            <select class="form-control custom-select " id="" name="">
                                            <option value="">Choose...</option>
                                            <option value="1">Aadhar</option>
                                            <option value="2">Pan card</option>
                            </select>
                            <input type="file" class="form-control" placeholder="" value="">
                    </div><br />
                    <div class="col-md-12"><label class="labels">State</label>
                        <!-- <input type="text" class="form-control" placeholder="enter state" value=""> -->
                        <select class="form-control custom-select " id="state" name="state">
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
                    </div><br />
                    <div class="col-md-12"><label class="labels">City</label><input type="text" class="form-control"
                            placeholder="enter city" value=""></div><br />
                    <div class="col-md-12"><label class="labels">Email ID</label><input type="email"
                            class="form-control" placeholder="enter email id" value=""></div><br />
                    <div class="col-md-12"><label class="labels">New Password</label><input type="password"
                            class="form-control" placeholder="New password" value=""></div><br />
                    <div class="col-md-12"><label class="labels">Confirm Password</label><input type="password"
                            class="form-control" placeholder="Confirm password" value=""></div><br />

                </div>

                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save
                        Profile</button></div>
            </div>
        </div>

    </div>
</div>




@endsection