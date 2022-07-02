@extends('adminmaster')
@section('content')
<style>
    /* .container {
  width: 100%;
  margin-right: auto;
  margin-left: auto;
  padding-right: 15px;
  padding-left: 15px;
} */
.card-body {
  padding: 1.5rem;
  flex: 1 1 auto;
}
.justify-content-center {
  justify-content: center !important;
}

.justify-content-between {
  justify-content: space-between !important;
}

.align-items-center {
  align-items: center !important;
}
img {
    page-break-inside: avoid;
  }
  .card-profile-image {
  position: relative;
}

.card-profile-image img {
  position: absolute;
  left: 50%;
  max-width: 180px;
  transition: all .15s ease;
  transform: translate(-50%, -30%);
  border-radius: .375rem;
}

.card-profile-image img:hover {
  transform: translate(-50%, -33%);
}
</style>
<div class="container ">
    <div class="row">
        <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
            <div class="card card-profile shadow">
                <!-- <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2"> -->
                <div class="card-profile-image">
                    <a href="#">
                        <img src="{{ asset('images/admin.webp') }}" class="rounded-circle img-fluid">
                    </a>
                </div>
                <!-- </div>
            </div>  -->
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-xl-8 order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">My account</h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form>
                        <h6 class="heading-small text-muted mb-4">User information</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-username">Username</label>
                                        <input type="text" id="input-username"
                                            class="form-control form-control-alternative" placeholder="Username"
                                            value="lucky.jesse">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Email address</label>
                                        <input type="email" id="input-email"
                                            class="form-control form-control-alternative"
                                            placeholder="jesse@example.com">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-first-name">First name</label>
                                        <input type="text" id="input-first-name"
                                            class="form-control form-control-alternative" placeholder="First name"
                                            value="Lucky">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-last-name">Last name</label>
                                        <input type="text" id="input-last-name"
                                            class="form-control form-control-alternative" placeholder="Last name"
                                            value="Jesse">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Address -->
                        <h6 class="heading-small text-muted mb-4">Contact information</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-address">Address</label>
                                        <input id="input-address" class="form-control form-control-alternative"
                                            placeholder="Home Address"
                                            value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-city">City</label>
                                        <input type="text" id="input-city" class="form-control form-control-alternative"
                                            placeholder="City" value="New York">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-country">Country</label>
                                        <input type="text" id="input-country"
                                            class="form-control form-control-alternative" placeholder="Country"
                                            value="United States">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-country">Postal code</label>
                                        <input type="number" id="input-postal-code"
                                            class="form-control form-control-alternative" placeholder="Postal code">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
























@endsection