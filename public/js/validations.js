jQuery.validator.addMethod("lettersonly", function(value, element) {
    return this.optional(element) || /^[a-z]+$/i.test(value);
    }); 

$().ready(function () {
    $("button").click(function () {
        $("#person").validate({
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
                gender:{
                    required:true
                },
                cuemail: {
                    required: true,
                    email: true
                },
                cumobile:{
                    required:true,
                    minlength:10,
                    maxlength:10
                },
                cuaddress:{
                    required:true
                },
                custate:{
                    required:true
                },
                cucity:{
                    required:true
                },
                cupincode:{
                     required:true,
                     minlength:6,
                     maxlength:6
                },
                password: {
                    required: true,
                    minlength: 6
                }
            },
                messages:{
                firstname: {
                    required: "enter first name",
                    minlength: "enter mnm 3 char",
                    lettersonly:"only alphabets allowed"
                },
                lastname: {
                    required: "enter last name",
                    minlength: "enter mnm of 1 char"
                },
                email: "enter valid email",
                password: {
                    required: "enter password",
                    minlength: "password must be mnm of 6 char"
                }
            }
        })
    })
})