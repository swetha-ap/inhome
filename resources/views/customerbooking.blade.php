@extends('customermaster')
@section('content')
<style>

</style>
<div class="container">
    <br><br><br><br>
    <div class="row ">

        <div class="col-md-5"></div>
        <div class="col-md-3">
            <h1 align="center">BOOK NOW</h1>
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-5">
            <div class="card-body">
                <form>

                    <label class="form-group" for="reqservice">Enter Preferred Service</label>

                    <select class="form-control" id="reqservice">
                        <option value="Select">Select</option>
                        <option value="Maid">Maid</option>
                        <option value="Babysitter">Babysitter</option>
                        <option value="Cook">Cook</option>
                    </select>

                    <br />

                    <label class="form-group" for="reqstate">Enter State</label>

                    <select class="form-control" id="reqstate">
                        <option value="Select">Select</option>

                    </select>

                    <br />
                    <label class="form-group" for="reqcity">Enter City</label>

                    <select class="form-control" id="reqcity">
                        <option value="Select">Select</option>
                    </select>

                    <br />
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-3">
                            <button type="button" class="btn btn-lg btn-primary "
                                data-mdb-ripple-color="dark">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection