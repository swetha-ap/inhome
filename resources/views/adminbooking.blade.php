@extends('adminmaster')
@section('content')
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
  <h1 align="center">Manage Bookings</h1>
    <br><br><br><br><br>
    <div class="row">
        <!-- <div class="container"> -->
        <div class="col-md-1"></div>
        <div class="col-md-11">
            <table id="adminbooking" class="table table-striped table-bordered table-sm display" cellspacing="0"
                width="100%">
                <thead>
                    <tr>
                        <th class="th-sm">SNo

                        </th>
                        <th class="th-sm">Customer Name

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
                        <th class="th-sm">Action

                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>ABC</td>
                        <td>XYZ</td>
                        <td>Maid</td>
                        <td>Bangalore</td>
                        <td>2022/04/25</td>
                        <td>08:00am</td>
                        <td><button class="btn-success">ACCEPT</button> <button class="btn-danger">DECLINE</button></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>DEF</td>
                        <td>PQR</td>
                        <td>Cook</td>
                        <td>Chennai</td>
                        <td>2022/07/25</td>
                        <td>13:50pm</td>
                        <td><button class="btn-success">ACCEPT</button> <button class="btn-danger">DECLINE</button></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>GHI</td>
                        <td>UVW</td>
                        <td>Babysitter</td>
                        <td>Kochi</td>
                        <td>2022/01/12</td>
                        <td>17:00pm</td>
                        <td><button class="btn-success">ACCEPT</button> <button class="btn-danger">DECLINE</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#adminbooking').DataTable({});
    });
</script>
@endsection