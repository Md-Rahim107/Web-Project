function form() {
    alert("Validation started"); // Debugging step
    console.log("Form validation started");

    var fname = document.getElementById("ifname").value;
    var email = document.getElementById("iemail").value;
    var mobile = document.getElementById("imob").value;
    var pass = document.getElementById("ipass").value;

    var namepattern = /^[a-zA-Z.]+$/;
    var emailpattern = /^[a-zA-Z0-9_.+-]+@[a-zA-Z]+\.[a-zA-Z]+$/;
    var mobpattern = /(\+88)?-?01[3-9]\d{8}/;
    var passpattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;

    // Name Validation
    if (fname.length < 2 || fname.length > 20) {
        document.getElementById("efname").innerHTML = "Length must be 2-20 characters";
        return false;
    } else if (!fname.match(namepattern)) {
        document.getElementById("efname").innerHTML = "Invalid input";
        return false;
    } else {
        document.getElementById("efname").innerHTML = "";
    }

    // Email Validation
    if (!email.match(emailpattern)) {
        document.getElementById("eemail").innerHTML = "Invalid input";
        return false;
    } else {
        document.getElementById("eemail").innerHTML = "";
    }

    // Mobile Validation
    if (!mobile.match(mobpattern)) {
        document.getElementById("emob").innerHTML = "Invalid input";
        return false;
    } else {
        document.getElementById("emob").innerHTML = "";
    }

    // Password Validation
    if (!pass.match(passpattern)) {
        document.getElementById("epass").innerHTML = "Password must contain at least one uppercase, one lowercase, one number, and be at least 8 characters";
        return false;
    } else {
        document.getElementById("epass").innerHTML = "";
    }

    return true;
}
