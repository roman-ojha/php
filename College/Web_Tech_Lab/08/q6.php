<?php
    $conn = mysqli_connect("localhost","root","","WebTech");
    $query = "SELECT * FROM Student;";
    
    if(mysqli_connect_error()){
        echo "Connection error<br/>";
    }else{
        $res = mysqli_query($conn,$query);
        if($res){
            if(mysqli_num_rows($res)>0){
            ?>
                <table border="1">
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Password</th>
                    </tr>
                
            <?php
                while($student=mysqli_fetch_assoc($res)){
            ?>
                <tr>
                    <td><?php echo $student["first_name"]?></td>
                    <td><?php echo $student["last_name"]?></td>
                    <td><?php echo $student["email"]?></td>
                    <td><?php echo $student["address"]?></td>
                    <td><?php echo $student["password"]?></td>
                </tr>
               
            <?php
                }
            ?>
             </table>
            <?php
            };
        }else{
            echo "Error while querying<br/>";
        }
    }
?>