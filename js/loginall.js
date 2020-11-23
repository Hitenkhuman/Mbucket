var user_id;
var cap;
$(function($) {
  // $('#searchbtn').click(function(e){
  //   e.preventDefault();
  //   var st=$("#searchtext").val();
  //   $.ajax({
  //     type:'POST',
  //     url:'livesearch.php',
  //     data:{
  //       'searchtext':st;
  //     },
  //     success: function(data){

  //     }
  //   })
    
  // });

  $('#login').click(function(e) {
    e.preventDefault();
    var email = $("#loginemail").val();
    var pass = $("#loginpass").val();
    var usercap= $("#usercap").val();
    if(varifyemail(email))
    {
       
        if(varifypass(pass))
        {
            
                if(usercap!=cap)
                {
                    alert("please enter cnc");
                    captcha();
                    $("#captcha").html(cap);
                }
                 else{
                     $.ajax({
                     type: "POST",
                    url: 'login.php',
                    data: {
                    'email': email,
                    'pass': pass
                    },
                    success: function(data) {
                    if(isNaN(data))
                        alert("invalid user and password");
                    else{
                        user_id=data;
                        
                        alert("login");
                        $("#loginModal .close").click();
                    }
                  
                    }
                    });
                    }
        }
        else
        {
        alert("Input Password and Submit [7 to 15 characters which contain at least one numeric digit and a special character]");
        }   
    }
   else
    {
        alert("not okk email");
    } 
  });


  $("#refresh").click(function(e){
   
    captcha();
    $("#captcha").html(cap);
  });


  


  function captcha(){
      var no="1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
      var x=no[Math.floor(Math.random()* no.length)];

      for (let i = 0; i < 6; i++) {
          x=x+no[Math.floor(Math.random()* no.length)];
      }
      cap=x;
  }
  $(window).on("load",function(){
    captcha();
    $("#captcha").html(cap);
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
});
