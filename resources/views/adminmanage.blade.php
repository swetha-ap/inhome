@extends('adminmaster')
@section('content')
<style>

</style>
<div class="container form-group">
    <br><br>
    <div class="row">
        <div class="col-md-5"></div>
        <div class="col-md-4">
            <h1>Manage Services</h1>
        </div>
    </div>
    <br><br><br>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <th>Services Provided</th>
                    <th>Action</th>
                </thead>
                <tbody>
                 <tr>
                    <td>Maid</td>
                    <td><button class="btn btn-danger">REMOVE</button></td>
                 </tr>
                 <tr>
                    <td>Baby Sitter</td>
                    <td><button class="btn btn-danger">REMOVE</button></td>
                 </tr>
                 <tr>
                    <td>Cook</td>
                    <td><button class="btn btn-danger">REMOVE</button></td>
                 </tr>
               </tbody>   
            </table>
        </div>
    </div>
    <br><br><br>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-5">
            <table class="table">
                <tr>
                    <td> Add New Service</td>
                    <td> <input class="form-control" type="text" name="newservice" id=""
                            placeholder="Enter new service"></td>
                    <td><button class="btn btn-success ">ADD</button></td>
                </tr>
            </table>
        </div>
    </div>
   

</div>
@endsection