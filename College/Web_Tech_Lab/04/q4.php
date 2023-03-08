<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Largest element</title>
</head>
<body>
    <script>
        const arr = [[3,5,10,20],[30,50,40,10],[1000,20,3000,450]];
        let largest = arr[0][0];
        arr.forEach((arr2)=>{
            arr2.forEach((elm)=>{
                if(elm>largest){
                    largest = elm;
                }
            })
        })
        document.write("Largest element from: [[3,5,10,20],[30,50,40,10],[1000,20,3000,450]]: ",largest);
    </script>
</body>
</html>