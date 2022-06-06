@extends('master')
@section('content')
   <style>
       h1{
           margin-left: 100px;
           padding: 50px;
           font-family: serif;
       }
       .bgimg{
        background-image:url('{{ asset ('images/as.jfif') }}');
       }
       h4{
           color:black;
           font-family: serif;
       }
     
   </style>
     <div class="container-fluid bgimg" >
        <div class="row">
            <div class="col mx-auto" style="height: 200px;" >
              <h1>About Us</h1></div>
          </div>
         <div class="row" style="height: 500px;">
         <div class="col-1"></div>
        <div class=" col-6" >
             
            <h4>IN-HOME Services is an online platform that provides home services across India.</h4>
            <h4>Key findings in the National Center for Health Statistics (NCHS) Data Brief, <br /> 
               shows that women (10.4%) were almost twice as likely as were men (5.5%) to have had depression.
               Hence this app is targeted towards women.</h4>
               
            <h4>Due to ever increasing busy schedules and job-demands, getting your house chores 
                done can be very draining. Hence it would be great to have a trustful helping hand at your 
                doorstep with one CLICK. It can be a lifesaver during your most dreaded situations. You can 
                book your required services beforehand and take that break you deserve without any guilt.
            </h4>
        
            <h4>We also aim to provide job oppurtunities to professionals to deliver their services at home.</h4>
        </div>
       </div>
    </div>
      
    
@endsection