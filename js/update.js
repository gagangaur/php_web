$(document).ready(function(){
    $('#update').click(function(){
        var gender;
        $("select.gender").change(function(){
             gender = $(this).children("option:selected").val(); });
             console.log("------------------------"+gender);
        $.ajax({
            url:"/test/controllers/dashboard.php",
            method:"POST",
            data:{
                name:$("#name").val(),
                password:$("#password").val(),
                mobile:$("#mobile").val(),
                age:$('#age').val(),
                address:$('#address').val(),
                email:$('#email').val(),
                gender: gender,
            },
            success: function(data){
                console.log("inside the success function in update");
                alert("data updated");
            }
        })
    })
})