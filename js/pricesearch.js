$(function($) {
    $('#ps').click(function(e) {
        e.preventDefault();
        var price=$('#price').val();
        $.ajax({
            type: "POST",
            url: 'pricesearchajax.php',
            data: {
            'price':price
            },
            success: function(data) {
                if(isNaN(data))
                    $('#dt').html(data);
                else
                    alert("no mobile found");
             }
            });
    });
});
