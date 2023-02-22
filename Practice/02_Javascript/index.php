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
            <input type="password" id="password" name="password" />
            <br />
            <input type="button" onclick="validateUser()" value="Validate">
        </fieldset>
    </form>
    <h1 id="output"></h1>
    <script type="text/javascript" src="script.js">
    </script>
</body>

</html>