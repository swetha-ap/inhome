@extends('master')
@section('content')
   <style>
       h1{
           margin-left: 100px;
           padding: 50px;
       }
       .grid{
           display: grid;
           grid-template-columns: 400px 300px;
           height:500px;
       }
       .one{
           position: relative;
           left: 400px;
           
       }
       .pic{
           
           background-image: url('images/about.webp');
           background-repeat: no-repeat;
       }
   </style>
  
     <h1 >About Us</h1>
     <div class="grid" >
         <div style=" padding-left: 50px;">
        <img src="{{ asset ('images/about.webp') }}">
        </div>
        <div class="one" style="width:500px;">
             
            <p>IN-HOME Services is an online platform that provides home services across India.</p>
            <p>Key findings in the National Center for Health Statistics (NCHS) Data Brief, <br /> 
               shows that women (10.4%) were almost twice as likely as were men (5.5%) to have had depression.
               Hence this app is targeted towards women.</p>
               
            <p>Due to ever increasing busy schedules and job-demands, getting your house chores 
                done can be very draining. Hence it would be great to have a trustful helping hand at your 
                doorstep with one CLICK. It can be a lifesaver during your most dreaded situations. You can 
                book your required services beforehand and take that break you deserve without any guilt.
            </p>
        
            <p>We also aim to provide job oppurtunities to professionals to deliver their services at home.</p>
        </div>
       
    </div>
      
    
@endsection