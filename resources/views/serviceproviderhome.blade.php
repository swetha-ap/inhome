@extends('serviceprovidermaster')
@section('content')
<style>
  .card-counter{
    box-shadow: 2px 2px 10px #DADADA;
    margin: 5px;
    padding: 20px 10px;
    background-color: #fff;
    height: 150px;
    border-radius: 5px;
    transition: .3s linear all;
  }

  .card-counter:hover{
    box-shadow: 4px 4px 20px #DADADA;
    transition: .3s linear all;
  }

  .card-counter.primary{
    background-color: #007bff;
    color: #FFF;
  }

  .card-counter.danger{
    background-color: #ef5350;
    color: #FFF;
  }  

  .card-counter.success{
    background-color: #66bb6a;
    color: #FFF;
  }  
  .card-counter.info{
    background-color: #26c6da;
    color: #FFF;
  }  

  .card-counter i{
    font-size: 5em;
    opacity: 0.2;
  }

  .card-counter .count-numbers{
    position: absolute;
    right: 35px;
    top: 20px;
    font-size: 32px;
    display: block;
  }

  .card-counter .count-name{
    position: absolute;
    right: 35px;
    top: 65px;
    font-style: italic;
    text-transform: capitalize;
    opacity: 0.5;
    display: block;
    font-size: 18px;
  }
  .card-counter a{
    position: absolute;
    right: 35px;
    top: 100px;
    font-style: italic;
    text-transform: capitalize;
    opacity: 1;
    display: block;
    font-size: 18px;
  }
</style>
<div class="container">
  <br><br><br><br><br><br>
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-4">
      <div class="card-counter primary">
        <i class="fas fa-list-alt"></i>
        <span class="count-numbers">1</span>
        <span class="count-name">New Bookings</span>
        <!-- <a href="#" style="color: blue;">Click here</a> -->
      </div>
    </div>
    <div class="col-md-2"></div>
    <div class="col-md-4">
      <div class="card-counter success">
        <i class="fas fa-list-alt"></i>
        <span class="count-numbers">5</span>
        <span class="count-name">Confirmed Bookings</span>
        <!-- <a href="#" style="color: green;">Click here</a> -->
      </div>
    </div>
  </div>
  <br><br><br>
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-4">
      <div class="card-counter danger">
        <i class="fa fa-database"></i>
        <span class="count-numbers">0</span>
        <span class="count-name">Declined Bookings</span>
        <!-- <a href="#" style="color: red;">Click here</a> -->
      </div>
    </div>
    <div class="col-md-2"></div>
    <div class="col-md-4">
      <div class="card-counter info">
        <i class="fas fa-envelope"></i>
        <span class="count-numbers">3</span>
        <span class="count-name">Mails</span>
        <!-- <a href="#" style="color: lightblue;">Click here</a> -->
      </div>
    </div>
  </div>
</div>

@endsection