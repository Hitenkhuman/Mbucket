$(document).ready(function () {
  $("#ps").click(function (e) {
    e.preventDefault();
    var price = $("#price").val();
    if (price == "") {
      $("#phelp").text("Please Enter Price Value...!!");
    } else {
      $.ajax({
        type: "POST",
        url: "pricesearchajax.php",
        data: {
          price: price,
        },
        success: function (data) {
          $("#dt").html(data);
          $("#phelp").text("");
        },
      });
    }
  });
});
