<?php
    /*
        *) AJAX:
            -> Asynchronous Javascript and XML
            -> AJAX is a technique for creating fast and dynamic web pages.
            -> using AJAX we can only load or replace the particular part of the page
            -> EX: if we use Ajax for form handling then after we submit the form it will not even get reload
            -> to make AJAX simple we can use 'JQuery':
            -> Syntax:
                $.ajax({
                    url: 'file.php',
                    type : "POST",
                    data : <string>/<array>/<object>,
                    success: function(data){
                        // response data
                    }
                })
    */

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP with Ajax</title>
    <style>
        body{
            display: flex;
            justify-content: center;
            padding: 0px;
            margin: 0px;
        }
        #container{
            width: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        #header{
            background-color: yellow;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #load-data-container{
            width: 100%;
            background-color: green;
            padding: 1rem;
            box-sizing: border-box;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        table{
            margin-top: 1rem;
        }
        input{
            padding: 1rem;
            cursor: pointer;
        }
        th{
            background-color: blue;
        }
        .id{
            padding: 1rem;
        }
        .name{
            padding: 1rem 10rem 1rem 10rem;
        }
    </style>
</head>
<body>
    <div id="container">

        <div id="header">
            <h1>PHP with Ajax</h1>
        </div>
        <div id="load-data-container">
            <input type="submit" value="Load Data" id="load-data"/>
        </div>
        <div id="table-container">
        </div>
    </div>
    <script type="text/javascript">
        const loadDataBtn = document.getElementById('load-data');
        loadDataBtn.addEventListener('click',async(e)=>{
            e.preventDefault();

            const response = await fetch("./ajax-load.php",{
                method:"POST",
            })

            // now here we will get the html text as response
            const htmlText = await response.text()
            // now we will append the html code into table container
            document.getElementById('table-container').innerHTML = htmlText;
        })
    </script>
</body>
</html>
