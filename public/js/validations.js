//   CUSTOMER SIGNUP
$().ready(function () {
    $("#csubmit").click(function () {
        $("#customersignup").validate({
            rules: {
                cufname: {
                    required: true,
                    minlength: 3,
                    lettersonly: true
                },
                culname: {
                    required: true,
                    minlength: 1,
                    lettersonly: true
                },
                gender: {
                    required: true
                },
                cuemail: {
                    required: true,
                    email: true
                },
                cumobile: {
                    required: true,
                    minlength: 10,
                    maxlength: 10,
                    digits: true
                },
                cuaddress: {
                    required: true
                },
                custate: {
                    required: true
                },
                cucity: {
                    required: true
                },
                cupincode: {
                    required: true,
                    minlength: 6,
                    maxlength: 6,
                    digits: true
                },
                cuid: {
                    required: true
                },
                cupload: {
                    required: true
                },
                cupassword: {
                    required: true,
                    minlength: 6,
                    mypassword:true
                },
                cupassword1: {
                    required: true,
                    minlength: 5,
                    equalTo: "#cspassword"
                }

            },
            messages: {
                cufname: {
                    required: "Enter First Name",
                    lettersonly: "Only ALPHABETS Allowed"
                },
                culname: {
                    required: "Enter Last Name",
                    lettersonly: "Only ALPHABETS Allowed"
                },
                cupassword: {
                    required: "Enter password",
                    minlength: "Password must be mnm of 6 char"
                    // specialChars:"Password must have alphanumeric & special character"
                },
                cupassword1: {
                    required: "Enter Password",
                    equalTo: "Passwords must MATCH!!!"
                },
                cuid: {
                    required: "Select ID"
                },
                cupload: {
                    required: "Upload ID Proof"
                },
                cupincode: {
                    required: "Enter Pincode",
                    digits: "Only NUMBERS Allowed"
                },
                cumobile: {
                    required: "Enter Mobile Number",
                    digits: "Only NUMBERS Allowed"
                },
                cuaddress:{
                    required:"Enter Address"
                },
                custate:{
                    required:"Enter State"
                },
                cucity:{
                    required:"Enter City"
                },
                cuemail:{
                    required:"Enter Email"
                }
            },
            highlight: function (element) {
                $(element).parent().addClass('error')
            },
            unhighlight: function (element) {
                $(element).parent().removeClass('error')
            },
            onsubmit: true
        })
    })
})

//   SERVICE PROVIDER SIGNUP
$().ready(function () {
    $("#spsubmit").click(function () {
        $("#spsignup").validate({
            rules: {
                spfn: {
                    required: true,
                    minlength: 3,
                    lettersonly: true
                },
                spln: {
                    required: true,
                    minlength: 1,
                    lettersonly: true
                },
                gender: {
                    required: true
                },
                spmail: {
                    required: true,
                    email: true
                },
                spmob: {
                    required: true,
                    minlength: 10,
                    maxlength: 10,
                    digits: true
                },
                spaddr: {
                    required: true
                },
                spstate: {
                    required: true
                },
                spcitys: {
                    required: true
                },
                sppin: {
                    required: true,
                    minlength: 6,
                    maxlength: 6,
                    digits: true
                },
                spids: {
                    required: true
                },
                spupload: {
                    required: true
                },
                sppwd: {
                    required: true,
                    minlength: 6,
                    mypassword:true
                },
                sppwd1: {
                    required: true,
                    minlength: 5,
                    equalTo: "#sppassword"
                },
                spservices: {
                    required: true
                },
                spexpe: {
                    required: true,
                    digits: true
                },
                spchg: {
                    required: true,
                    digits: true
                }
            },
            messages: {
                spfn: {
                    required: "Enter First Name",
                    lettersonly: "Only ALPHABETS Allowed"
                },
                spln: {
                    required: "Enter Last Name",
                    lettersonly: "Only ALPHABETS Allowed"
                },
                sppwd: {
                    required: "Enter password",
                    minlength: "Password must be mnm of 6 char"
                },
                sppwd1: {
                    required: "Enter Password",
                    equalTo: "Passwords must MATCH!!!"
                },
                spids: {
                    required: "Select ID"
                },
                spupload: {
                    required: "Upload ID Proof"
                },
                sppin: {
                    required: "Enter Pincode",
                    digits: "Only NUMBERS Allowed"
                },
                spmob: {
                    required: "Enter Mobile",
                    digits: "Only NUMBERS Allowed"
                },
                spservices: {
                    required: "Select Your Service"
                },
                spexpe: {
                    required: "Enter Your Experience",
                    digits: "Only NUMBERS Allowed"
                },
                spchg: {
                    required: "Enter Your Service Charge",
                    digits: "Only NUMBERS Allowed"
                },
                spaddr:{
                    required:"Enter Address"
                },
                spstate:{
                    required:"Enter State"
                },
                spcitys:{
                    required:"Enter City"
                },
                spmail:{
                    required:"Enter Email"
                }
            },
            highlight: function (element) {
                $(element).parent().addClass('error')
            },
            unhighlight: function (element) {
                $(element).parent().removeClass('error')
            },
            onsubmit: true
        })
    })
})

// SERVICE PROVIDER EDIT PROFILE
$().ready(function () {
    $("#speditb").click(function () {
        // alert("hello")
        $("#spedit").validate({
            rules: {
                spfn: {
                    required: true,
                    minlength: 3,
                    lettersonly: true
                },
                spln: {
                    required: true,
                    minlength: 1,
                    lettersonly: true
                },
                spmail: {
                    required: true,
                    email: true
                },
                spmob: {
                    required: true,
                    minlength: 10,
                    maxlength: 10,
                    digits: true
                },
                spaddr: {
                    required: true
                },
                spstate: {
                    required: true
                },
                spcitys: {
                    required: true
                },
                sppin: {
                    required: true,
                    minlength: 6,
                    maxlength: 6,
                    digits: true
                },
                spids: {
                    required: true
                },
                spupload: {
                    required: true
                },
                sppwd: {
                    required: true,
                    minlength: 6,
                    mypassword:true
                },
                sppwd1: {
                    required: true,
                    minlength: 5,
                    equalTo: "#sppasswd"
                },
                spservices: {
                    required: true
                },
                spexpe: {
                    required: true,
                    digits: true
                },
                spchg: {
                    required: true,
                    digits: true
                }
            },
            messages: {
                spfn: {
                    required: "Enter First Name",
                    lettersonly: "Only ALPHABETS Allowed"
                },
                spln: {
                    required: "Enter Last Name",
                    lettersonly: "Only ALPHABETS Allowed"
                },
                sppwd: {
                    required: "Enter password",
                    minlength: "Password must be mnm of 6 char"
                },
                sppwd1: {
                    required: "Enter Password",
                    equalTo: "Passwords must MATCH!!!"
                },
                spids: {
                    required: "Select ID"
                },
                spupload: {
                    required: "Upload ID Proof"
                },
                sppin: {
                    required: "Enter Pincode",
                    digits: "Only NUMBERS Allowed"
                },
                spmob: {
                    required: "Enter Mobile",
                    digits: "Only NUMBERS Allowed"
                },
                spservices: {
                    required: "Select Your Service"
                },
                spexpe: {
                    required: "Enter Your Experience",
                    digits: "Only NUMBERS Allowed"
                },
                spchg: {
                    required: "Enter Your Service Charge",
                    digits: "Only NUMBERS Allowed"
                },
                spaddr:{
                    required:"Enter Address"
                },
                spstate:{
                    required:"Enter State"
                },
                spcitys:{
                    required:"Enter City"
                },
                spmail:{
                    required:"Enter Email"
                }
            },
            highlight: function (element) {
                $(element).parent().addClass('error')
            },
            unhighlight: function (element) {
                $(element).parent().removeClass('error')
            },
            onsubmit: true
        })
    })
})


//   CUSTOMER EDIT PROFILE
$().ready(function () {
    $("#cuseditb").click(function () {
        $("#cusedit").validate({
            rules: {
                cufname: {
                    required: true,
                    minlength: 3,
                    lettersonly: true
                },
                culname: {
                    required: true,
                    minlength: 1,
                    lettersonly: true
                },
                cuemail: {
                    required: true,
                    email: true
                },
                cumobile: {
                    required: true,
                    minlength: 10,
                    maxlength: 10,
                    digits: true
                },
                cuaddress: {
                    required: true
                },
                custate: {
                    required: true
                },
                cucity: {
                    required: true
                },
                cupincode: {
                    required: true,
                    minlength: 6,
                    maxlength: 6,
                    digits: true
                },
                cuid: {
                    required: true
                },
                cupload: {
                    required: true
                },
                cupassword: {
                    required: true,
                    minlength: 6,
                    mypassword:true
                },
                cupassword1: {
                    required: true,
                    minlength: 5,
                    equalTo: "#cuspwd"
                }

            },
            messages: {
                cufname: {
                    required: "Enter First Name",
                    lettersonly: "Only ALPHABETS Allowed"
                },
                culname: {
                    required: "Enter Last Name",
                    lettersonly: "Only ALPHABETS Allowed"
                },
                cupassword: {
                    required: "Enter password",
                    minlength: "Password must be mnm of 6 char"
                    // specialChars:"Password must have alphanumeric & special character"
                },
                cupassword1: {
                    required: "Enter Password",
                    equalTo: "Passwords must MATCH!!!"
                },
                cuid: {
                    required: "Select ID"
                },
                cupload: {
                    required: "Upload ID Proof"
                },
                cupincode: {
                    required: "Enter Pincode",
                    digits: "Only NUMBERS Allowed"
                },
                cumobile: {
                    required: "Enter Mobile Number",
                    digits: "Only NUMBERS Allowed"
                },
                cuaddress:{
                    required:"Enter Address"
                },
                custate:{
                    required:"Enter State"
                },
                cucity:{
                    required:"Enter City"
                },
                cuemail:{
                    required:"Enter Email"
                }
            },
            highlight: function (element) {
                $(element).parent().addClass('error')
            },
            unhighlight: function (element) {
                $(element).parent().removeClass('error')
            },
            onsubmit: true
        })
    })
})

//   ADMIN EDIT PROFILE
$().ready(function () {
    $("#admineditb").click(function () {
        $("#adminedit").validate({
            rules: {
                adfname: {
                    required: true,
                    minlength: 3,
                    lettersonly: true
                },
                adlname: {
                    required: true,
                    minlength: 1,
                    lettersonly: true
                },
                ademail: {
                    required: true,
                    email: true
                },
                admobile: {
                    required: true,
                    minlength: 10,
                    maxlength: 10,
                    digits: true
                },
                adaddress: {
                    required: true
                },
                adstate: {
                    required: true
                },
                adcity: {
                    required: true
                },
                adpincode: {
                    required: true,
                    minlength: 6,
                    maxlength: 6,
                    digits: true
                },
                adpassword: {
                    required: true,
                    minlength: 6,
                    mypassword:true
                },
                adpassword1: {
                    required: true,
                    minlength: 5,
                    equalTo: "#cuspwd"
                }

            },
            messages: {
                adfname: {
                    required: "Enter First Name",
                    lettersonly: "Only ALPHABETS Allowed"
                },
                adlname: {
                    required: "Enter Last Name",
                    lettersonly: "Only ALPHABETS Allowed"
                },
                adpassword: {
                    required: "Enter password",
                    minlength: "Password must be mnm of 6 char"
                    // specialChars:"Password must have alphanumeric & special character"
                },
                adpassword1: {
                    required: "Enter Password",
                    equalTo: "Passwords must MATCH!!!"
                },
                adpincode: {
                    required: "Enter Pincode",
                    digits: "Only NUMBERS Allowed"
                },
                admobile: {
                    required: "Enter Mobile Number",
                    digits: "Only NUMBERS Allowed"
                },
                adaddress:{
                    required:"Enter Address"
                },
                adstate:{
                    required:"Enter State"
                },
                adcity:{
                    required:"Enter City"
                },
                ademail:{
                    required:"Enter Email"
                }
            },
            highlight: function (element) {
                $(element).parent().addClass('error')
            },
            unhighlight: function (element) {
                $(element).parent().removeClass('error')
            },
            onsubmit: true
        })
    })
})