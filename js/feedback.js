$(document).ready(function () {
  $("#fedbacksub").click(function (e) {
    e.preventDefault();
    var name = $("#name").val();
    var email = $("#email").val();
    var mob = $("#phone").val();
    var sugg = $("#sugest").val();
    if (name == "" || email == "" || mob == "" || sugg == "") {
      $("#fmsg")
        .text("Please complete the form")
        .css("color", "red")
        .css("fontWeight", "bolder");
    } else {
      $.ajax({
        type: "POST",
        url: "feedbackajax.php",
        data: {
          name: name,
          email: email,
          mobile: mob,
          sugg: sugg,
        },
        success: function (data) {
          if (data == 1) {
            $("#fmsg")
              .text("Your Feedback Successfully registered,Thank You...")
              .css("color", "green")
              .css("fontWeight", "bolder");
          } else {
            $("#fmsg")
              .text("Something Went Wrong..try again..!!")
              .css("color", "red")
              .css("fontWeight", "bolder");
          }
        },
      });
    }
  });
});
