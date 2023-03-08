<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Example 01</title>
    <script
      type="text/javascript"
      src="https://code.jquery.com/jquery-3.5.1.min.js"
    ></script>
  </head>
  <body>
    <p>Click this Paragraph</p>
    <script type="text/javascript">
      $(document).ready(function () {
        $("p").click(function (event) {
          $(this).css("background-color", "red");
        });
      });
    </script>
  </body>
</html>
