
window.onload = function(){
  //document.getElementById('header').innerHTML = "Hello";
};

$(document).ready(function(){

  var error_name = false;
  var error_email = false;
  var error_phone = false;

  $("#phone_error_message").hide();
  $("#name_error_message").hide();
  $("#email_error_message").hide();

  //Check Name Error
  /*var name_length = $("#person_name").val().length;
  $("#person_name").focusout(function(){
  if(name_length < 3){
    $("#name_error_message").html("Name length less than 3 characters");
      $("#name_error_message").show();
  }
  else{
    $("#name_error_message").hide();
  }
  });

*/
});
