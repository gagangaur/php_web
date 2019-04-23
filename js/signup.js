
$(document).ready(function(){
     console.log("loaded");
    $('#SIGNUP').click(function () {
      $.ajax({
url:"/test/controllers/signup.php",
method:"POST",
data:{name:$("#name").val(),password:$("#password").val(),email:$("#email").val()},
success: function(data){
  console.log("inside the success function");
  console.log(data);
  if(data==1)
  {
      console.log("success");
      alert("data reached");
     window.location.href = '/test/html/dashboard.html';
            
} else{
    alert("Error occured");
}
},
});
});
});