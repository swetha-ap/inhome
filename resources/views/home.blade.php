@extends('master')
@section('content')
<style>
     .parent {
height: 500px;
display: flex;
align-items: center;
justify-content: center;
}
</style>
<div>
        <img src="images/Banner.png" alt=""height="600px" width="1335px">
    </div>
    <div id="1" class="parent" style="background-color: #BFC9CA ;">
        <a href="" align="center" style="font-size: 40px; text-decoration: none">Quality Services, A Click Away</a>
        <div style="display:inline-block; padding-left: 50px;" >
             <h2 align="center">Maids</h2> 
             <img src="images/clean.jpg" height="200px" width="200px">
        </div>
        <div style="display:inline-block; padding-left: 50px;">
            <h2 align="center" V>Babysitters</h2> 
            <img src="images/nanny.png" height="200px" width="200px">
       </div>
       <div style="display:inline-block; padding-left: 50px;">
        <h2 align="center">Cooks</h2> 
        <img src="images/cooking.jpg" height="200px" width="200px">
   </div>
    </div>
@endsection