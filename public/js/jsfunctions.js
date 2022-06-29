function validate() {
    cfirst = document.forms["form"]["cufname"].value
    clast = document.forms["form"]["culname"].value
    gen = document.forms["form"]["gender"].value
    cusemail = document.forms["form"]["cuemail"].value
    cusmob = document.forms["form"]["cumobile"].value
    cusaddr = document.forms["form"]["cuaddress"].value
    cusstate = document.forms["form"]["custate"].value
    cuscity = document.forms["form"]["cucity"].value
    cuspin = document.forms["form"]["cupincode"].value
    cusid = document.forms["form"]["cuid"].value
    cuspwd = document.forms["form"]["cupassword"].value
    cuspwd1 = document.forms["form"]["cupassword1"].value
    var g1 = document.forms["form"]["gender"]
    var regEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/g; //Javascript reGex for Email Validation.
    var regPhone = /^\d{10}$/                                        // Javascript reGex for Phone Number validation.
    var regName = /\d+$/g
    var returnval = true;

    if (cfirst == "" || regName.test(cfirst)) {
        document.getElementById('1').innerHTML="Enter First Name!!!"
        document.forms["form"]["cufname"].focus()
        returnval=false;
    }
    if (clast == "" || regName.test(clast)) {
        document.getElementById('2').innerHTML="Enter Last Name!!!"
        document.forms["form"]["culname"].focus()
        returnval= false;
    }
    for (var i = 0; i < g1.length; i++) {
        if (g1[i].checked == true) {
           returnval=true
           
        }
        else{
            document.getElementById('3').innerHTML="Enter Gender!!!"
            returnval=false
        }
    }
    

    if (cusemail == "" || !regEmail.test(cusemail)) {
        document.getElementById('4').innerHTML="Enter Email!!!"
        document.forms["form"]["cuemail"].focus();
        returnval= false;
    }
    if (cusmob == "" || !regPhone.test(cusmob)) {
        document.getElementById('5').innerHTML="Enter Mobile!!!"
        document.forms["form"]["cumobile"].focus();
        returnval= false;
    }
    if (cusaddr == "") {
        document.getElementById('6').innerHTML="Enter Address!!!"
        document.forms["form"]["cuaddress"].focus();
        returnval= false;
    }
    if (cusstate.selectedIndex== -1) {
        document.getElementById('7').innerHTML="Enter State!!!"
        document.forms["form"]["custate"].focus();
        returnval= false;
    }
    if (cuspin == "") {
        document.getElementById('9').innerHTML="Enter Pincode!!!"
        document.forms["form"]["cupincode"].focus();
        returnval= false;
    }
    if (cusid.selectedIndex == -1) {
        document.getElementById('10').innerHTML="Enter ID!!!"
        document.forms["form"]["cupincode"].focus();
        returnval= false;
    }
    if (cuspwd == "") {
        document.getElementById('11').innerHTML="Enter Password!!!"
        document.forms["form"]["cupassword"].focus();
        returnval= false;
    }

    if (cuspwd.length < 6) {
        document.getElementById('11').innerHTML="Password should be atleast 6 character long";
        document.forms["form"]["cupassword"].focus();
        returnval= false;

    }
    if (cuspwd1 == "") {
        document.getElementById('12').innerHTML="Enter Confirm Password!!!"
        document.forms["form"]["cupassword1"].focus();
        returnval= false;
    }

    if (cuspwd != cuspwd1) {
        document.getElementById('12').innerHTML="Passwords must match"
        document.forms["form"]["cupassword1"].focus();
        returnval= false
    }
    
    return returnval
}

