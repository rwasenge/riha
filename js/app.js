$(document).ready(function(){
   $.ChangeCaptcha();
});

$.ChangeCaptcha = function()
 {
   var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZ";
   var string_length = 5;
   var ChangeCaptcha = '';
   for (var i=0; i<string_length; i++) {
       var rnum = Math.floor(Math.random() * chars.length);
       ChangeCaptcha += chars.substring(rnum,rnum+1);
   }
   document.getElementById('randomfield').value = ChangeCaptcha;
 }

$("#send").click(function(){
if(document.getElementById('CaptchaEnter').value == document.getElementById('randomfield').value )
{
$.submitit();
// console.log('test');
}
else
{
alert('Please re-check the captcha');
}
});



 $.submitit=function(){

  var data = $('form').serialize();
  var type="post";
  var url ="reserved.php";

  $.ajax({
    url: url,
    type: type,
    data: data,
    success : function(){
      alert("Reservation Submitted.");
      $("#form").fadeOut("slow");
    },
    faliure : function(){
      alert("Error occurred. Please submit again.");
    }
  })

}
