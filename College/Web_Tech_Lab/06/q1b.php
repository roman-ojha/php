<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
  <body>
    <p>Hi this is the first paragraph</p>
    <div id="id1">I am inside this div with id selector</div>
    <div class="class1">I am inside this div with class selector</div>
    <button>Click me to hide this paragraph</button>
    <script>
      $(document).ready(function () {
        $("p").click(function () {
          $("p").css("background-color", "red");
        });
      });
      $(document).ready(function () {
        $("button").click(function () {
          $(".class1").css("background-color", "green");
        });
      });
      $(document).ready(function () {
        $("button").click(function () {
          $("#id1").hide();
        });
      });
    </script>
  </body>
</html>
