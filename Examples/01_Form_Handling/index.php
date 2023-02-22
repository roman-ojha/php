<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="" rel="stylesheet">
    <title>Register</title>
</head>

<body>
    <form action="handle.php" method="post">
        <fieldset>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Enter name" />
            <br />
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter Email" novalidate />
            <br />
            <label for="number">Phone Number</label>
            <input type="number" name="number" id="number" placeholder="Enter Phone Number" />
            <br />
            <div>
                <label for="gender">Gender</label>
                <br />
                <label for="male">Male</label>
                <input type="radio" name="gender" id="male" value="male" />
                <label for="female">Female</label>
                <input type="radio" name="gender" id="female" value="female" />
            </div>
            <div>
                <label for="city">City</label>
                <select name="city" id="city">
                    <option value="" default>Select City</option>
                    <option value="kathmandu">Kathmandu</option>
                    <option value="damak">Damak</option>
                    <option value="pokhara">Pokhara</option>
                </select>
            </div>
            <input type="submit" name="register" value="Register">
        </fieldset>
    </form>
</body>

</html>