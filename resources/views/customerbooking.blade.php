@extends('customermaster')
@section('content')
<!-- Datatable plugin CSS file -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" />

<!-- jQuery library file -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js">
</script>

<!-- Datatable plugin JS library file -->
<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<style>
    .table td {
        text-align: center;
    }

    .table th {
        text-align: center;
        background-color: rgb(9, 9, 58);
        color: white;
    }

    .center {
        margin: auto;
        height: auto;
        width: 300px;
        padding: 20px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .hideform {
        display: none;
    }
</style>
<div class="container">
    <br><br>
    <div class="row ">

        <div class="col-md-5"></div>
        <div class="col-md-3">
            <h1 align="center">BOOK NOW</h1>
        </div>
    </div>
    <br />
    <form>
        <div class="form-row">
            <div class="col-md-4">
                <label class="form-group" for="reqservice">Enter Preferred Service</label>
                <select class="form-control" id="reqservice">
                    <option value="Select">Select</option>
                    <option value="Maid">Maid</option>
                    <option value="Babysitter">Babysitter</option>
                    <option value="Cook">Cook</option>
                </select>
            </div>

            <div class="col-md-4">
                <label class="form-group" for="reqstate">Enter State</label>

                <select class="form-control" id="reqstate">
                    <option value="Select">Select</option>

                </select>
            </div>

            <div class="col-md-3">
                <label class="form-group" for="reqcity">Enter City</label>

                <select class="form-control" id="reqcity">
                    <option value="Select">Select</option>
                </select>
            </div>

            <div class="col-md-1" style="padding-top: 40px;">
                <button type="button" class="btn  btn-primary " data-mdb-ripple-color="dark">Search</button>
            </div>
        </div>
    </form>
</div>
<br><br><br><br>
<h2 align="center">Services Near You</h2>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table id="cusbooking" class="table table-striped table-bordered table-sm display" cellspacing="0"
                width="100%">
                <thead>
                    <tr>
                        <th class="th-sm">SNo

                        </th>
                        <th class="th-sm">Service Provider Name

                        </th>
                        <th class="th-sm">Experience

                        </th>
                        <th class="th-sm">Service Charge
                            <i class="fas fa-rupee-sign"></i>

                        </th>

                        <th class="th-sm">Rating

                        </th>

                        <th class="th-sm">Action

                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>JKL</td>
                        <td>1 year</td>
                        <td>200</td>
                        <td><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></td>
                        <td><button type="button" class="btn-primary" data-toggle="modal" data-target="#bookmodal">BOOK NOW</button></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>MNO</td>
                        <td>2 year</td>
                        <td>400</td>
                        <td><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></td>
                        <td><button type="button" class="btn-primary" data-toggle="modal" data-target="#bookmodal">BOOK NOW</button></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>TUV</td>
                        <td>6 months</td>
                        <td>150</td>
                        <td><i class="fas fa-star-half-alt"></i></td>
                        <td><button type="button" class="btn-primary" data-toggle="modal" data-target="#bookmodal">BOOK NOW</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
                        <!-- BOOK NOW MODAL -->
<div class="modal fade" id="bookmodal" tabindex="-1" role="dialog" aria-labelledby="bookmodallabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="bookmodallabel">BOOK NOW</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="" class="form-group">
                Enter Date:
                <input type="date" name="bdate" value="" class="form-control">
                <br>
                Enter Time:
                <input type="time" name="btime" value="" class="form-control">
            </form>
        </div>
        <div class="modal-footer">
        <form action="">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Book</button>
        </form>
        </div>
      </div>
    </div>
  </div>
@endsection