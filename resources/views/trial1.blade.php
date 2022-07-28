@extends('adminmaster')
@section('content')
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
        <div class="col-md-1"></div>
        <div class="col-md-2">
            <form action="">
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addservices">Add Service</button>
            </form>
        </div>
        <div class="col-md-2">
            <form action="">
                <button type="button" class="btn btn-info" id="manage">Manage Service</button>
            </form>
        </div>
    </div>
   <br><br><br>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-8">
            <table class="table table-bordered table-hover table-dark" id="servicetable" style="display: none;">
                <thead>
                    <th>Services Provided</th>
                    <th>Action</th>
                </thead>
                <tbody>
                 <tr>
                    <td>Maid</td>
                    <td><button class="btn btn-secondary">REMOVE</button></td>
                 </tr>
                 <tr>
                    <td>Baby Sitter</td>
                    <td><button class="btn btn-secondary">REMOVE</button></td>
                 </tr>
                 <tr>
                    <td>Cook</td>
                    <td><button class="btn btn-secondary">REMOVE</button></td>
                 </tr>
               </tbody>   
            </table>
        </div>
    </div>
</div>
 
                                   <!-- ADD SERVICES MODAL  -->
<div class="modal fade" id="addservices" tabindex="-1" role="dialog" aria-labelledby="bookmodallabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="bookmodallabel">ADD SERVICES</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="" class="form-group">
                Enter Service:
                <input type="text" name="newservice" value="" class="form-control">
            </form>
        </div>
        <div class="modal-footer">
        <form action="">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Add</button>
        </form>
        </div>
      </div>
    </div>
  </div>
  <script>
    $().ready(function(){
        $('#manage').click(function(){
            $('#servicetable').show();
            // $('#servicetable').toggle();
        })
     })
  </script>
@endsection