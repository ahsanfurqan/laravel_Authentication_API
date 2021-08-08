<!DOCTYPE html>
<html>
<head>
<title>Form</title>
<link rel="stylesheet" href="style.css">

<body class="bk">

<form  id='lform'>
    @csrf
<div class="login-box">    
<h1>Login</h1>

<div class="textbox">
    <input type="text" id='Email' placeholder="Username" name="email" value="">
</div>

<div class="textbox">
    <input type="password" id='Password' placeholder="Password" name="pass" value="">
</div>


<input class=btn id='btn' type="submit" name="" value="Sign in">
</div>
</form>
<div id="output"></div>
</body>
</head>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    // $("#btn").click(function(){
    //     $.post("api/Login",{
    //     "email":document.getElementById('email'),
    //     "password":document.getElementById('pass')
    //     },function(data, status){
    // alert("Data: " + data + "\nStatus: " + status);
    //         });
    //     });

    jQuery('#lform').submit(function(event){
        event.preventDefault();
        // alert("this is me");  
        jQuery.ajax({
            url:"http://127.0.0.1:8000/api/Login",
            data:jQuery('#lform').serialize(),
            type:'POST',
            dataType:'json',
            success:function(result){
                console.log(result);
            }
        });
        // var $form =$(this),
        // email=$form.find("input[name='email']").val(),
        // email=$form.find("input[name='pass']").val(),
    });
</script>