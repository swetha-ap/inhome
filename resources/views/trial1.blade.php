@extends('customermaster')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset ('js/ratingstars.js') }}"></script>
<link rel="stylesheet" href="{{ asset ('css/ratingstars.css') }}">
<!-- Datatable plugin CSS file -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" />

<!-- jQuery library file -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js">
</script>

<!-- Datatable plugin JS library file -->
<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<style>
    .table td {
        text-align: center;
    }

    .table th {
        text-align: center;
        background-color: rgb(17, 17, 80);
        color: white;
    }
</style>
<div class="container">
  <br><br>
  <h1 align="center">My Bookings</h1>
    <br><br><br>
    <div class="row">
        <!-- <div class="container"> -->
        <div class="col-md-1"></div>
        <div class="col-md-11">
            <table id="booking" class="table table-striped table-bordered table-sm display" cellspacing="0"
                width="100%">
                <thead>
                    <tr>
                        <th class="th-sm">SNo

                        </th>
                        <th class="th-sm">Service Provider Name

                        </th>
                        <th class="th-sm">Service

                        </th>
                        <th class="th-sm">Place

                        </th>
                        <th class="th-sm">Date

                        </th>
                        <th class="th-sm">Time
                        </th>
                        <th class="th-sm">Status

                        </th>
                        <th class="th-sm">Rating

                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>ABC</td>
                        <td>Maid</td>
                        <td>Bangalore</td>
                        <td>2022/04/25</td>
                        <td>08:00am</td>
                        <td><button class="btn-success disabled">COMPLETED</button></td>
                        <td><div class="star-rating">
                            <s><s><s><s><s></s></s></s></s></s>
                        </div>
                        <div class="show-result ">
                            No stars selected yet.
                        </div></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>DEF</td>
                        <td>Cook</td>
                        <td>Chennai</td>
                        <td>2022/07/25</td>
                        <td>13:50pm</td>
                        <td><button class="btn-info disabled">ACCEPTED</button> </td>
                        <td><div class="star-rating">
                            <s><s><s><s><s></s></s></s></s></s>
                        </div>
                        <div class="s2">
                            No stars selected yet.
                        </div></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>GHI</td>
                        <td>Babysitter</td>
                        <td>Kochi</td>
                        <td>2022/01/12</td>
                        <td>17:00pm</td>
                        <td><button class="btn-info disabled">ACCEPTED</button> </td>
                        <td><div class="star-rating">
                            <s><s><s><s><s></s></s></s></s></s>
                        </div>
                        <div class="s3">
                            No stars selected yet.
                        </div></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>IJK</td>
                        <td>Babysitter</td>
                        <td>Kochi</td>
                        <td>2022/01/12</td>
                        <td>17:00pm</td>
                        <td><button class="btn-success disabled">COMPLETED</button></td>
                        <td><div class="star-rating">
                            <s><s><s><s><s></s></s></s></s></s>
                        </div>
                        <div class="s4">
                            No stars selected yet.
                        </div></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#booking').DataTable({});
    })
</script>
@endsection