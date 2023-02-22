<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="" rel="stylesheet">
    <title>Javascript</title>
</head>

<body>

    <form action="">
        <fieldset>
            <input type="text" id="field" name="field" />
            <input type="button" value="Validate" onclick="validate()">
        </fieldset>
    </form>

    <form action="">
        <fieldset>
            <input type="text" id="username" name="username" />
            <br />
            <input type="email" novalidate id="email" name="email" />
            <br />
            <input type="password" id="password" name="password" />
            <br />
            <select name="city" id="city">
                <option value="null" default>Select City</option>
                <option value="kathmandu">Kathmandu</option>
                <option value="lalitpur">Lalitpur</option>
            </select>
            <div>
                <label for="male">Male</label>
                <input type="radio" name="gender" id="male" value="male" />
                <label for="female">Female</label>
                <input type="radio" name="gender" id="female" value="female" />
            </div>
            <div>
                <label for="car">Car</label>
                <input type="checkbox" name="vehicle" id="car" value="car" />
                <label for="bus">Bus</label>
                <input type="checkbox" name="vehicle" id="bus" value="bus" />
                <label for="truck">Truck</label>
                <input type="checkbox" name="vehicle" id="truck" value="truck" />
            </div>
            <input type="button" onclick="validateUser()" value="Validate">
        </fieldset>
    </form>
    <h1 id="output"></h1>
    <script type="text/javascript" src="script.js">
    </script>
</body>

</html>