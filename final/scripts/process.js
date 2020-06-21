/*
filename: [CHAN SIAW ZHENG]
author: [CHAN SIAW ZHENG]
created: [18/6/2020]
last modified: [18/6/2020]
description: [Javascript of HTML Final Assignment, Design of the website]
*/

"use strict";

function validate(){


    var regex = /^S(\d){5}$/;
    var reg = /\d+/;
    var referenceno = document.getElementById("txtbox-reference").value;
    var username = document.getElementById("txtbox-username").value;
    var phoneno = document.getElementById("phone").value;
    //alert(referenceno.charAt(0));

    if(referenceno.charAt(0)!='S' || !(referenceno.match(regex))){
        alert('Reference Number must start with capital letter “S” and followed by 5 numbers ');
        return false;        
    }

    if (username.length < 2 || username.length > 20) {
        alert("Username has to be between 2 to 20 alpha characters");
        return false;        
    }

 
    if (phoneno.length != 10 || !(phoneno.match(reg))) {
        alert("Phone Number has to be exactly 10 digits");
        return false;        
    }
}

