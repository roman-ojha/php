<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    
</head>
<body>
    <script type="text/javascript">
        function validat(){
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;
            console.log(username,password);
            if(username == ""||password == ""){
                alert("Username & password can't be empty");
            }
            else{
                alert("validated");
            }
        }
    </script>
    <form action="">
        <label for="username">Username</label>
        <input type="text" id="username" name="username"/>
        <br/>
        <label for="password">Password</label>
        <input type="password" id="password" name="password"/>
        <input type="button" value="Validate" id="validate"  onclick="validat()"/>
    </form>

</body>
</html>