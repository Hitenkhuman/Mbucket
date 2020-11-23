$(function ($) {
  $("#mobsel").click(function (e) {
    e.preventDefault();
    var mob1 = $("#brand1").val();
    var mob2 = $("#brand2").val();
    $.ajax({
      type: "POST",
      url: "modellist.php",
      data: {
        id1: mob1,
        id2: mob2,
      },
      success: function (data) {
        $("#modelcontent").html(data);
        $("#comparebtn").show();
      },
    });
  });

  $("#compare").click(function (e) {
    e.preventDefault();
    var mob1 = $("#model1").val();
    var mob2 = $("#model2").val();
    $.ajax({
      type: "POST",
      url: "compareajax.php",
      data: {
        id1: mob1,
        id2: mob2,
      },
      success: function (data) {
        $("#comparetable").html(data);
      },
    });
  });
});
