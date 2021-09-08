<!DOCTYPE html>
<html>
<head>
<title>Login Form</title>
<!-- <link rel="stylesheet" href="style.css"> -->
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
<link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

<body class="bk">
<div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1> Login Form</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Login to our site</h3>
                            		<p>Enter your username and password to log on:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-key"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="" id='login-form'class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Username</label>
			                        	<input type="text" name="form-username" id='Email'placeholder="Email." class="form-Email form-control">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" id='Password'name="form-password" placeholder="Password..." class="form-password form-control">
			                        </div>
			                        <button type="submit" name='submit' class="btn">Sign in!</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <!-- <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script> -->
       
        
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

    jQuery('#login-form').submit(function(event){
        event.preventDefault();
        // alert(jQuery('#login-form').serialize());
        var formData = {
        Email: $("#Email").val(),
        Password: $("#Password").val(),
    };  
    alert(formData);
        jQuery.ajax({
            url:"http://127.0.0.1:8000/api/Login",
            data:formData,
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