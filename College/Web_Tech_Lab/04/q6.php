<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <label for="string">Enter a string:</label>
    <input type="text" id="string" name="string"/>
    <input type="button" value="reverse" id="reverse" onclick="reverse()"/>
    <script>
        function reverse(){
            const str =  document.getElementById('string').value;
            let str2="";
            for(let i =str.length - 1;i>=0;i--){
                str2 += str[i];
            }
            const arrStr = str.split("");
            document.write(str2);
        }
    </script>
</body>
</html>