<?php
    /*
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
            width: 80%;
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
        #form-container{
            width: 100%;
            background-color: green;
            padding: 1rem;
            box-sizing: border-box;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 2rem;
        }
        table{
            margin-top: 1rem;
        }
        input[type="text"]{
            padding: 0.5rem 1rem;
            border-radius: 10px;
        }
        input[type="submit"]{
            padding: 1rem;
            cursor: pointer;
            border-radius: 10px;
            background-color: red;
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
        <div id="form-container">
            <label>Name:</label>
            <input type="text" name="sname" id="sname" placeholder="Name"/>
            <input id="save-data" type="submit" value="Save"/>
        </div>
        <div id="table-container">
        </div>
    </div>
    <script type="text/javascript">
        const loadDataBtn = document.getElementById('save-data');
        
        // function to load table
        async function loadTable(){
            const response = await fetch("./ajax-load.php",{
                method:"POST",
            })
            // now here we will get the html text as response
            const htmlText = await response.text()
            // now we will append the html code into table container
            document.getElementById('table-container').innerHTML = htmlText;
        }

        loadTable();

        // Saving data on click
        loadDataBtn.addEventListener('click',async(e)=>{
            e.preventDefault();

            const name = document.getElementById('sname').value;
            const response = await fetch("./ajax-insert.php",{
                method:"POST",
                header:{
                    'Content-Type':'application/json',
                },
                body:JSON.stringify({sname:name})
            })

            // reloading table after insert
            if(response.status === 200){
                loadTable();
            }
        })
    </script>
</body>
</html>

