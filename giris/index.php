<?php 
    include("connection.php")
?>

<html>
    <head>
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        
        <div id="form">
            <h1>Giriş Yap</h1>
            <form name="form" action="login.php" onsubmit="return isvalid()" method="POST">
                <label>Kullanıcı adı: </label>
                <input type="text" id="user" name="user"></br></br>
                <label>Şifre:   </label>
                <input type="password" id="pass" name="pass"></br></br>
                <input type="submit" id="btn" value="Giriş yap!" name = "submit"/>
            </form>
        </div>
        <script>
            function isvalid(){
                var user = document.form.user.value;
                var pass = document.form.pass.value;
                if(user.length=="" && pass.length==""){
                    alert(" kullanıcı adı ve şifre boş olmamalı");
                    return false;
                }
                else if(user.length==""){
                    alert("kullanıcı adı girilmeli");
                    return false;
                }
                else if(pass.length==""){
                    alert(" şifre girilmeli");
                    return false;
                }
                
            }
        </script>
    </body>
</html>