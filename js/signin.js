var otp;
var tt;
var count;
$(document).ready(function () {
  $("#otpgen").click(function (e) {
    e.preventDefault();
    var email = $("#useremail").val();
    var mobile = $("#usermobile").val();
    if (varifyemail(email)) {
      $("#emailHelp").text("");
      if (varifymobile(mobile)) {
        $("#mobileHelp").text("");
        $.ajax({
          type: "POST",
          url: "otpgen.php",
          data: {
            email: email,
            mobile: mobile,
          },
          beforeSend: function () {
            $("#spinner").show();
          },
          success: function (data) {
            if (isNaN(data)) {
              $("#otphelp")
                .text("Something went wrong...please try again")
                .css("color", "red")
                .css("fontWeight", "bolder");
            } else {
              otp = data;
              $("#otphelp")
                .text("OTP SUCCESSFULLY SENT..")
                .css("color", "green")
                .css("fontWeight", "bolder");
              $("#spinner").hide();
              $("#otpgen").slideUp(1000);
              $("#otpres").attr("disabled", false);
              count = 60;
              tt = setInterval(timer, 1000);
            }
          },
        });
      } else {
        $("#mobileHelp")
          .text("Please enter valid Mobile Number")
          .css("color", "red")
          .css("fontWeight", "bolder");
      }
    } else {
      $("#emailHelp")
        .text("Please enter valid email address")
        .css("color", "red")
        .css("fontWeight", "bolder");
    }
  });

  $("#otpres").click(function (e) {
    e.preventDefault();
    var email = $("#useremail").val();
    var mobile = $("#usermobile").val();
    $.ajax({
      type: "POST",
      url: "otpgen.php",
      data: {
        email: email,
        mobile: mobile,
      },
      beforeSend: function () {
        $("#spinner1").show();
      },
      success: function (data) {
        if (isNaN(data)) {
          $("#otphelp")
            .text("Something went wrong...please try again")
            .css("color", "red")
            .css("fontWeight", "bolder");
        } else {
          otp = data;
          $("#spinner1").hide();
          $("#otphelp")
            .text("OTP SUCCESSFULLY SENT..")
            .css("color", "green")
            .css("fontWeight", "bolder");
          count = 60;
          clearInterval(tt);
          tt = setInterval(timer, 1000);
        }
      },
    });
  });

  $("#otpver").click(function (e) {
    e.preventDefault();
    var userotp = $("#otp").val();
    if (userotp != otp) {
      $("#otphelp")
        .text("INCORRECT OTP !!")
        .css("color", "red")
        .css("fontWeight", "bolder");
    } else {
      $("#otphelp")
        .text("OTP Successfully Varified ")
        .css("color", "green")
        .css("fontWeight", "bolder");
      clearInterval(tt);
      $("#clock").slideUp();
      $("#signin").attr("disabled", false);
    }
  });

  $("#userpass").blur(function () {
    var userpass = $("#userpass").val();
    if (!varifypass(userpass)) {
      $("#passhelp")
        .text(
          "Input Password and Submit [7 to 15 characters which contain at least one numeric digit and a special character]"
        )
        .css("color", "red")
        .css("fontWeight", "bolder");
    } else {
      $("#passhelp").text("");
    }
  });

  $("#confirmpass").blur(function () {
    var userpass = $("#userpass").val();
    var confirmpass = $("#confirmpass").val();
    if (userpass != confirmpass) {
      $("#conpasshelp")
        .text("Password must match")
        .css("color", "red")
        .css("fontWeight", "bolder");
    } else {
      $("#passhelp").text("");
    }
  });

  $("#signin").click(function (e) {
    e.preventDefault();
    var email = $("#useremail").val();
    var mobile = $("#usermobile").val();
    var userpass = $("#userpass").val();
    $.ajax({
      type: "POST",
      url: "signinajax.php",
      data: {
        useremail: email,
        usermobile: mobile,
        userpass: userpass,
      },
      success: function (data) {
        if (isNaN(data)) {
          $("#emailHelp")
            .text("Already register account with us...")
            .css("color", "red")
            .css("fontWeight", "bolder");
          $("#mobilelHelp")
            .text("Please Enter new data to signin..")
            .css("color", "red")
            .css("fontWeight", "bolder");
        } else {
          user_id = data;
          window.location.assign("index.php");
        }
      },
    });
  });
  function varifyemail(email) {
    if (email.length == 0) {
      return false;
    }
    var reg = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if (reg.test(email)) {
      return true;
    } else {
      return false;
    }
  }

  function varifymobile(mobile) {
    if (mobile.length == 0) {
      return false;
    }
    var reg = /^\d{10}$/;
    if (reg.test(mobile)) {
      return true;
    } else {
      return false;
    }
  }

  function varifypass(pass) {
    if (pass.length == 0) {
      return false;
    }
    var reg = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;
    if (reg.test(pass)) {
      return true;
    } else {
      return false;
    }
  }

  function timer() {
    count--;
    if (count < 0) {
      clearInterval(tt);
      otp = null;
      alert("Otp has been expired...");
      $("#timer").hide();
    }
    if (count < 10 && count >= 0) {
      $("#timer").html("00:0" + count);
    } else $("#timer").html("00:" + count);
  }
});
