var otp;
var tt;
var count;
$(function($){
  $('#otpgen').click(function(e) {
    e.preventDefault();
    var email = $("#useremail").val();
    var mobile = $("#usermobile").val();
    if(varifyemail(email))
    {
       
        if(varifymobile(mobile))
        {
                  $.ajax({
                    type: "POST",
                    url: 'otpgen.php',
                    data: {
                    'email': email,
                    'mobile':mobile
                    },
                    beforeSend:function(){
                      $('#spinner').show();
                      $('body').css("opacity","0.5");
                      
                    },
                    success: function(data) {
                     if(isNaN(data))
                       {alert("otp not sent");}
                     else
                     {
                     otp=data;
                     $('#spinner').hide();
                     $('body').css("opacity","1");
                     $('#otpgen').slideUp(1000);
                     $('#otpres').attr('disabled',false);
                     count=60;
                     tt=setInterval(timer,1000);
                     }
                    }
                    });
                    
        }
        else
        {
        alert("Incorrect Mobile Number");
        }   
    }
   else
    {
        alert("not okk email");
    } 
  });

  $('#otpres').click(function(e) {
    e.preventDefault();
    var email = $("#useremail").val();
    var mobile = $("#usermobile").val();
                  $.ajax({
                    type: "POST",
                    url: 'otpgen.php',
                    data: {
                    'email': email,
                    'mobile':mobile
                    },
                    beforeSend:function(){
                      $('#spinner').show();
                      $('body').css("opacity","0.5");
                      
                    },
                    success: function(data) {
                     if(isNaN(data))
                       alert("otp not sent")
                     else{
                     otp=data;
                     $('#spinner').hide();
                     $('body').css("opacity","1");
                     count=60;
                     tt=setInterval(timer,1000);
                     }
                    }
                    });
     
  });

  $('#otpver').click(function(e){
    e.preventDefault();
    var userotp=$('#otp').val();
    if (userotp!=otp) {
      alert('Incorrect otp');
    }
    else{
      alert("verified otp");
      clearInterval(tt);
      $('#clock').slideUp();
      $('#signin').attr('disabled',false);

    }
  });

  $('#userpass').blur(function(){
    var userpass=$('#userpass').val();
    if(!varifypass(userpass)){
      alert('Input Password and Submit [7 to 15 characters which contain at least one numeric digit and a special character]');
    }
  });

  $('#confirmpass').blur(function(){
    var userpass=$('#userpass').val();
    var confirmpass=$('#confirmpass').val();
    if(userpass!=confirmpass)
    {
      alert('password must match');
    }

  });

  $('#signin').click(function(e){
    e.preventDefault();
    var email = $("#useremail").val();
    var mobile = $("#usermobile").val();
    var userpass=$('#userpass').val();
    $.ajax({
      type: "POST",
      url: 'signinajax.php',
      data: {
      'useremail': email,
      'usermobile':mobile,
      'userpass':userpass
      },
      success: function(data) {
        if(isNaN(data))
           alert("signin failed");
        else{
        user_id=data;
        window.location.assign("index.php?"+user_id+"");
        }
        
      }
    });

  });
  function varifyemail(email){
    if (email.length==0) {
        return false;
    }
    var reg = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if (reg.test(email)){
    return true;
    }
    else{
    return false;
    }
  }
   
  function varifymobile(mobile){
    if (mobile.length==0) {
        return false;
    }
    var reg = /^\d{10}$/;
    if (reg.test(mobile)){
    return true;
    }
    else{
    return false;
    }
  }
   
  function varifypass(pass){
    if (pass.length==0) {
        return false;
    }
    var reg =   /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;
    if (reg.test(pass)){
    return true;
    }
    else{
    return false;
    }
  }

  function timer(){
    count--;
    if(count<0){
      clearInterval(tt);
      otp=null;
      alert("timeout");
      $('#timer').hide();
    }
    if (count<10 && count>=0) {
      $('#timer').html('00:0'+count);
    }
    else
       $('#timer').html('00:'+count);
  }
});
