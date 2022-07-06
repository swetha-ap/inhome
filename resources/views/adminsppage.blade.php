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
    <br><br><br><br><br>
    <div class="row">
        <!-- <div class="container"> -->
        <div class="col-md-1"></div>
        <div class="col-md-11">
            <table id="sptable" class="table table-striped table-bordered table-sm display" cellspacing="0"
                width="100%">
                <thead>
                    <tr>
                        <th class="th-sm">SP Id

                        </th>
                        <th class="th-sm">Name

                        </th>
                        <th class="th-sm">Speciality

                        </th>
                        <th class="th-sm">Age

                        </th>
                        <th class="th-sm">Place

                        </th>
                        <th class="th-sm">Start date

                        </th>
                        <th class="th-sm">Service Charge
                            <i class="fas fa-rupee-sign"></i>
                        </th>
                        <th class="th-sm">Action

                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>SP1</td>
                        <td>ABC</td>
                        <td>Maid</td>
                        <td>61</td>
                        <td>Bangalore</td>
                        <td>2022/04/25</td>
                        <td>200</td>
                        <td><button class="btn-success">ACCEPT</button> <button class="btn-danger">REMOVE</button></td>
                    </tr>
                    <tr>
                        <td>SP2</td>
                        <td>DEF</td>
                        <td>Babysitter</td>
                        <td>63</td>
                        <td>Chennai</td>
                        <td>2022/07/25</td>
                        <td>350</td>
                        <td><button class="btn-success">ACCEPT</button> <button class="btn-danger">REMOVE</button></td>
                    </tr>
                    <tr>
                        <td>SP3</td>
                        <td>GHI</td>
                        <td>Cook</td>
                        <td>66</td>
                        <td>Kochi</td>
                        <td>2022/01/12</td>
                        <td>200</td>
                        <td><button class="btn-success">ACCEPT</button> <button class="btn-danger">REMOVE</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#sptable').DataTable({});
    });
</script>
@endsection