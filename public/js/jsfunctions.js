// function validate() {
//     cfirst = document.forms["form"]["cufname"].value
//     clast = document.forms["form"]["culname"].value
//     gen = document.forms["form"]["gender"].value
//     cusemail = document.forms["form"]["cuemail"].value
//     cusmob = document.forms["form"]["cumobile"].value
//     cusaddr = document.forms["form"]["cuaddress"].value
//     cusstate = document.forms["form"]["custate"].value
//     cuscity = document.forms["form"]["cucity"].value
//     cuspin = document.forms["form"]["cupincode"].value
//     cusid = document.forms["form"]["cuid"].value
//     cuspwd = document.forms["form"]["cupassword"].value
//     cuspwd1 = document.forms["form"]["cupassword1"].value
//     var g1 = document.forms["form"]["gender"]
//     var regEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/g; //Javascript reGex for Email Validation.
//     var regPhone = /^\d{10}$/                                        // Javascript reGex for Phone Number validation.
//     var regName = /\d+$/g
//     var returnval = true;

//     if (cfirst == "" || regName.test(cfirst)) {
//         document.getElementById('l1').innerHTML="Enter First Name!!!"
//         document.forms["form"]["cufname"].focus()
//         returnval=false;
//     }
//     if (clast == "" || regName.test(clast)) {
//         document.getElementById('l2').innerHTML="Enter Last Name!!!"
//         document.forms["form"]["culname"].focus()
//         returnval= false;
//     }
//     for (var i = 0; i < g1.length; i++) {
//         if (g1[i].checked == true) {
//            returnval=true
           
//         }
//         else{
//             document.getElementById('l3').innerHTML="Enter Gender!!!"
//             returnval=false
//         }
//     }
    

//     if (cusemail == "" || !regEmail.test(cusemail)) {
//         document.getElementById('l4').innerHTML="Enter Email!!!"
//         document.forms["form"]["cuemail"].focus();
//         returnval= false;
//     }
//     if (cusmob == "" || !regPhone.test(cusmob)) {
//         document.getElementById('l5').innerHTML="Enter Mobile!!!"
//         document.forms["form"]["cumobile"].focus();
//         returnval= false;
//     }
//     if (cusaddr == "") {
//         document.getElementById('l6').innerHTML="Enter Address!!!"
//         document.forms["form"]["cuaddress"].focus();
//         returnval= false;
//     }
//     if (cusstate == "") {
//         document.getElementById('l7').innerHTML="Enter State!!!"
//         document.forms["form"]["custate"].focus();
//         returnval= false;
//     }
//     if (cuspin == "") {
//         document.getElementById('l9').innerHTML="Enter Pincode!!!"
//         document.forms["form"]["cupincode"].focus();
//         returnval= false;}
//         if(!cuspin.match(/^[0-9]{6}$/)){
//             document.getElementById('l9').innerHTML="Pincode must be 6 digits!!!"
//             document.forms["form"]["cupincode"].focus();
//             returnval= false;
//         }
//     
//     if (cusid == "") {
//         document.getElementById('l10').innerHTML="Enter ID!!!"
//         document.forms["form"]["cupincode"].focus();
//         returnval= false;
//     }
//     if (cuspwd == "") {
//         document.getElementById('l11').innerHTML="Enter Password!!!"
//         document.forms["form"]["cupassword"].focus();
//         returnval= false;}

//         if ( document.forms["form"]["cupassword"].length < 6) {
//             document.getElementById('l11').innerHTML="Password should be atleast 6 character long";
//             document.forms["form"]["cupassword"].focus();
//             returnval= false;
    
//         }
//     

//     if (cuspwd1 == "") {
//         document.getElementById('l12').innerHTML="Enter Confirm Password!!!"
//         document.forms["form"]["cupassword1"].focus();
//         returnval= false;}
//         if (cuspwd != cuspwd1) {
//             document.getElementById('l12').innerHTML="Passwords must match"
//             document.forms["form"]["cupassword1"].focus();
//             returnval= false
//         }
//     
//   return returnval
// }

function validation() {
    sfirst = document.forms["form1"]["spfn"].value
    slast = document.forms["form1"]["spln"].value
    gen = document.forms["form1"]["gender"].value
    smail = document.forms["form1"]["spmail"].value
    smob = document.forms["form1"]["spmob"].value
    saddr = document.forms["form1"]["spaddr"].value
    sstate = document.forms["form1"]["spstate"].value
    scity = document.forms["form1"]["spcity"].value
    spin = document.forms["form1"]["sppin"].value
    sservice=document.forms["form1"]["spservice"].value
    sexpe=document.forms["form1"]["spexpe"].value
    scharge=document.forms["form1"]["spchg"].value
    sid = document.forms["form1"]["spids"].value
    spwd = document.forms["form1"]["sppwd"].value
    spwd1 = document.forms["form1"]["sppwd1"].value
    var g1 = document.forms["form1"]["gender"]
    var regEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/g; //Javascript reGex for Email Validation.
    var regPhone = /^\d{10}$/                                        // Javascript reGex for Phone Number validation.
    var regName = /\d+$/g
    var returnval = true;

    if (sfirst == "" || regName.test(sfirst)) {
        document.getElementById('l13').innerHTML="Enter First Name!!!"
        document.forms["form1"]["spfn"].focus()
        returnval=false;
    }
    if (slast == "" || regName.test(slast)) {
        document.getElementById('l14').innerHTML="Enter Last Name!!!"
        document.forms["form1"]["spln"].focus()
        returnval= false;
    }
    for (var i = 0; i < g1.length; i++) {
        if (g1[i].checked == true) {
           returnval=true
           
        }
        else{
            document.getElementById('l15').innerHTML="Enter Gender!!!"
            returnval=false
        }
    }
    

    if (smail == "" || !regEmail.test(smail)) {
        document.getElementById('l16').innerHTML="Enter Email!!!"
        document.forms["form1"]["spmail"].focus();
        returnval= false;
    }
    if (smob == "" || !regPhone.test(smob)) {
        document.getElementById('l17').innerHTML="Enter Mobile!!!"
        document.forms["form1"]["spmob"].focus();
        returnval= false;
    }
    if (saddr == "") {
        document.getElementById('l18').innerHTML="Enter Address!!!"
        document.forms["form1"]["spaddr"].focus();
        returnval= false;
    }
    if (sstate == "") {
        document.getElementById('l19').innerHTML="Enter State!!!"
        document.forms["form1"]["spstate"].focus();
        returnval= false;
    }
    if (spin == "") {
        document.getElementById('l21').innerHTML="Enter Pincode!!!"
        document.forms["form1"]["sppin"].focus();
        returnval= false;
    }
    
    if(!spin.match(/^[0-9]{6}$/)){
            document.getElementById('l21').innerHTML="Pincode must be 6 digits!!!"
            document.forms["form1"]["sppin"].focus();
            returnval= false;
    }
    
    if (sservice == "") {
        document.getElementById('l22').innerHTML="Enter Service!!!"
        document.forms["form1"]["spservice"].focus();
        returnval= false;
    }
    if (sexpe == "") {
        document.getElementById('l23').innerHTML="Enter Experience!!!"
        document.forms["form1"]["spexpe"].focus();
        returnval= false;
    }
    if (scharge == "") {
        document.getElementById('l24').innerHTML="Enter Charge!!!"
        document.forms["form1"]["spchg"].focus();
        returnval= false;
    }
    if (sid == "") {
        document.getElementById('l25').innerHTML="Enter ID!!!"
        document.forms["form1"]["spids"].focus();
        returnval= false;
    }
    if (spwd == "") {
        document.getElementById('l26').innerHTML="Enter Password!!!"
        document.forms["form1"]["sppwd"].focus();
        returnval= false;
    }
        if ( document.forms["form1"]["sppwd"].length < 6) {
            document.getElementById('l26').innerHTML="Password should be atleast 6 character long";
            document.forms["form1"]["sppwd"].focus();
            returnval= false;
    
        }
    

    if (spwd1 == "") {
        document.getElementById('l27').innerHTML="Enter Confirm Password!!!"
        document.forms["form1"]["sppwd1"].focus();
        returnval= false;
    }
        if (spwd != spwd1) {
            document.getElementById('l27').innerHTML="Passwords must match"
            document.forms["form1"]["sppwd1"].focus();
            returnval= false
        }
    
    return returnval
}


