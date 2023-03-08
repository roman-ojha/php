<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String functions</title>
</head>
<body>
    <script>
        const str = "roman";
        document.write("toLowerCase(): ",str.toLowerCase(),"<br/>");
        document.write("toUpperCase(): ",str.toUpperCase(),"<br/>");
        document.write("concate(): ",str.concat(" ojha"),"<br/>");
        document.write("charAt(3): ",str.charAt(3),"<br/>");
        document.write("indexOf('m'): ",str.indexOf('m'),"<br/>");
        document.write("lastIndexOf('a'): ",str.lastIndexOf('a'),"<br/>");
        document.write("replace(): ",str.replace('o','j'));
    </script>
</body>
</html>