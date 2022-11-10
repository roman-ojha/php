<?php

    /*
        *) $_FILES:
            -> when we will upload image or file from client side web page then, to transfer that file from client to server '$_FILES' help us to do that
            -> it will return array which contain
                *> name
                    -> name of the file
                *> size
                    -> total size of the file
                *> tmp_name
                    -> temporary name
                *> type
                    -> like: jpg / phg / gif
            -> when it will return with these information then we have to use 'move_uploaded_file(<file_name>,<dest>);
                -> on '<file_name>' we will use temporary name
                -> on '<dest>' we have to specify where we want to upload this file
            -> 'move_uploaded_file(<file>,<dest>)' will upload file from client side to server
    */

    // when user will click the submit button
    if (isset($_FILES['image'])) {
        // first we will check doest file had been upload

        // now we will access the file information
        echo "<pre>";
        print_r($_FILES['image']);
        echo "</pre>";


        $file_name = $_FILES['image']['name'];
        $file_temp_name=$_FILES['image']['tmp_name'];
        $file_size=$_FILES['image']['size'];
        $file_type=$_FILES['image']['type'];

        echo $file_name."<br/>";
        echo $file_temp_name."<br/>";
        echo $file_size."<br/>";
        echo $file_type."<br/>";

        // upload that file to server
        $isUploaded = move_uploaded_file($file_temp_name, "./images/".$file_name);
        if ($isUploaded) {
            echo "Image get upload";
        } else {
            echo "Solve problem occur while uploading file";
        }
    }

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <!-- if you want to upload some file what are inside the form then we have to use 'enctype' attribute -->
        <input type="file" name="image"/>
        <br/><br/> 
        <input type="submit" value="upload"/>
    </form>
</body>
</html>