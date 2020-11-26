var user_id;
var cap;
$(document).ready(function () {
  $("#login").click(function (e) {
    e.preventDefault();
    var email = $("#loginemail").val();
    var pass = $("#loginpass").val();
    var usercap = $("#usercap").val();
    if (varifyemail(email)) {
      $("#loginemailHelp").text("");

      if (varifypass(pass)) {
        $("#passHelp").text("");
        if (usercap != cap) {
          $("#capHelp")
            .text("INVALID CAPTCHA")
            .css("color", "red")
            .css("fontWeight", "bolder");
          captcha();
          $("#captcha").html(cap);
        } else {
          $("#capHelp").text("");
          $.ajax({
            type: "POST",
            url: "login.php",
            data: {
              email: email,
              pass: pass,
            },
            success: function (data) {
              if (isNaN(data)) {
                $("#loginemailHelp")
                  .text("Invalid Username Or password..")
                  .css("color", "red")
                  .css("fontWeight", "bolder");
              } else {
                user_id = data;
                $("#loginModal .close").click();
                window.location.assign("index.php");
              }
            },
          });
        }
      } else {
        $("#passHelp")
          .text(
            "Incorrect Password [7 to 15 characters which contain at least one numeric digit and a special character]"
          )
          .css("color", "red")
          .css("fontWeight", "bolder");
      }
    } else {
      $("#loginemailHelp")
        .text("Invalid Email Address..")
        .css("color", "red")
        .css("fontWeight", "bolder");
    }
  });

  $("#refresh").click(function (e) {
    captcha();
    $("#captcha").html(cap);
  });

  $("#logoimage").mouseenter(function () {
    $("#logoimage").attr("src", "./images/logohover.png");
  });
  $("#logoimage").mouseleave(function () {
    $("#logoimage").attr("src", "./images/logo.png");
  });

  $("#fsbtn").click(function (e) {
    e.preventDefault();
    $("#tabinfo").slideToggle(1000);
  });

  function captcha() {
    var no = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
    var x = no[Math.floor(Math.random() * no.length)];

    for (let i = 0; i < 6; i++) {
      x = x + no[Math.floor(Math.random() * no.length)];
    }
    cap = x;
  }
  $(window).on("load", function () {
    captcha();
    $("#captcha").html(cap);
    $("#myModal").modal("show");
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
});
