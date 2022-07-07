@extends('serviceprovidermaster')
@section('content')
<script type="text/javascript" src="{{ asset ('js/validations.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>
<style>
    .uploadimg {
        cursor: pointer;

    }
    form .error{
         color: red;
         font-weight: bold;
         font-family: Arial, Helvetica, sans-serif;
    }
    .labels{
         color: black;
    }
</style>
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" width="150px" src="{{ asset('images/user3.png') }}">
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
                <form action="" id="spedit">
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">First Name</label>
                        <input type="text" class="form-control" placeholder="first name" value="" name="spfn">
                    </div>
                    <div class="col-md-6"><label class="labels">Last Name</label><input type="text" class="form-control"
                            value="" placeholder="last name" name="spln"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text"
                            class="form-control" placeholder="enter phone number" value="" name="spmob"></div>
                    <div class="col-md-12"><label class="labels">Address </label>
                        <textarea class="form-control rounded-0" id="" rows="3" placeholder="enter address"
                            name="spaddr"></textarea>
                    </div><br />
                    <div class="col-md-12"><label class="labels">Pincode</label><input type="text" class="form-control"
                            placeholder="enter pincode" value="" name="sppin"></div><br />
                    <div class="col-md-12"><label class="labels">ID</label>
                        <select class="form-control custom-select " id="" name="spids">
                            <option value="">Choose...</option>
                            <option value="1">Aadhar</option>
                            <option value="2">Pan card</option>
                        </select>
                        <input type="file" class="form-control" placeholder="" value="" name="spupload">
                    </div><br />
                    <div class="col-md-12"><label class="labels">Service</label>
                        <select class="form-control custom-select " id="" name="spservices">
                            <option value="">Choose...</option>
                            <option value="Maid">Maid</option>
                            <option value="Babysitter">Babysitter</option>
                            <option value="Cook">Cook</option>
                        </select>
                    </div>
                    <div class="col-md-12"><label class="labels">Years of Experience</label><input type="text"
                            class="form-control" placeholder="enter years of experience" value="" name="spexpe"></div>
                    <br />
                    <div class="col-md-12"><label class="labels">Service Charge</label><input type="text"
                            class="form-control" placeholder="enter salary" value="" name="spchg"></div><br />
                    <div class="col-md-12"><label class="labels">State</label>
                        <!-- <input type="text" class="form-control" placeholder="enter state" value=""> -->
                        <select class="form-control custom-select " id="state" name="spstate">
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
                            placeholder="enter city" value="" name="spcitys"></div><br />
                    <div class="col-md-12"><label class="labels">Email ID</label><input type="email"
                            class="form-control" placeholder="enter email id" value="" name="spmail"></div><br />
                    <div class="col-md-12"><label class="labels">New Password</label><input type="password"
                            class="form-control" placeholder="New password" value="" name="sppwd" id="sppasswd"></div><br />
                    <div class="col-md-12"><label class="labels">Confirm Password</label><input type="password"
                            class="form-control" placeholder="Confirm password" value="" name="sppwd1"></div><br />

                </div>

                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit"
                        id="speditb">Save
                        Profile</button>
                </div>
                </form>
            </div>
        </div>

    </div>
</div>
<script>
    jQuery.validator.addMethod("lettersonly", function (value, element) {
        return this.optional(element) || /^[a-z]+$/i.test(value);
    });

    // Password with spl char
    $.validator.addMethod('mypassword', function (value, element) {
        return this.optional(element) || (value.match(/[a-zA-Z]/) && value.match(/[0-9]/) && value.match(/[@#!_$]/));
    },
        'Password must contain at least one numeric,one alphabetic,one special character(@ # ! _ $');
</script>
@endsection