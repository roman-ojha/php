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
        .delete-btn{
            padding: 10px;
            background-color: darkorange;
            border-radius: 10px;
            border-width: 0px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div id="container">

        <div id="header">
            <h1>PHP with Ajax</h1>
        </div>
        <form id="form-container">
            <label>Name:</label>
            <input type="text" name="sname" id="sname" placeholder="Name"/>
            <input id="save-data" type="submit" value="Save"/>
        </form>
        <p id="msg"></p>
        <div id="table-container">
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        const formElm = document.getElementById('form-container');
        
        // function to load table
        async function loadTable(){
            const response = await fetch("./ajax-load.php",{
                method:"GET",
            })
            // now here we will get the html text as response
            const htmlText = await response.text()
            // now we will append the html code into table container
            document.getElementById('table-container').innerHTML = htmlText;
        }

        loadTable();

        // Saving data on click
        formElm.addEventListener('submit',async(e)=>{
            e.preventDefault();

            const name = document.getElementById('sname').value;
            if(name == ''){
                document.getElementById('msg').innerText = 'name field is required';
                document.getElementById('msg').style = 'color: red;';
                return;
            }

            const response = await fetch("./ajax-insert.php",{
                method:"POST",
                header:{
                    'Content-Type':'application/json',
                },
                body:JSON.stringify({sname:name})
            })

            const data = await response.json();
            if(data['success'] === 'true'){
                loadTable();
                document.getElementById('sname').value = '';
                document.getElementById('msg').innerText = `inserted name ${name}`;
                document.getElementById('msg').style = 'color: green;';
            }
            else{
                document.getElementById('msg').innerText = `Some Error occur while inserting`;
                document.getElementById('msg').style = 'color: red;';
            }

        })


        
        // using Jquery as well
        $(document).ready(function(){
            // Logic for Delete Item

            // Because '.delete-but' element had been dynamically loaded we have to on method on that button class
            $(document).on("click",'.delete-btn',function(){
                if(confirm("Do you want to delete this record?")){

                    // getting 'sid'
                    var studentId = $(this).data("id");
                    console.log(studentId);

                    // the element that we clicked
                    var element = $(this);

                    $.ajax({
                        url:"./ajax-delete.php",
                        type:"POST",
                        data:{
                            id:studentId
                        },
                        success:function(data){
                            if(parseInt(data) == 1){
                                // Successfully deleted
                                // Hiding the element that we delete

                                // closest is parent
                                $(element).closest('tr').fadeOut();

                                // Showing message after delete
                                $("#msg").html(`Deleted Record`);
                                $("#msg").css('color','green');
                            }
                            else{

                            }
                        }
                    });
                }
            });
        })
    </script>
</body>
</html>

