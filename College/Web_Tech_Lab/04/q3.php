<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array method</title>
</head>
<body>
    <script>
        const arr = [3,5,6,3,8,10,23,2,9];
        document.write("Arr: ",arr,"<br/>");
        arr.push(3);
        document.write("After push(): ",arr,"<br/>");
        arr.pop();
        document.write("After pop(): ",arr,"<br/>");
        arr.unshift(5);
        document.write("After unshift(): ",arr,"<br/>");
        const arr2 = arr.concat([5,3,2]);
        document.write("After concat(): ",arr2,"<br/>");
        arr.reverse();
        document.write("After reverse(): ",arr,"<br/>");
    </script>
</body>
</html>