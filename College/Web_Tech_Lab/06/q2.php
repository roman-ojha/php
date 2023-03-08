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
    <h1 id="double-click">Double Click</h1>
    <h1 class="hover-me">Hover</h1>
    <h3>Mouse Enter</h3>
    <h1 name="keydown">keydown</h1>
    <input type="text" />
    <script>
      $(document).ready(function () {
        $("#double-click").dblclick(function () {
          $(this).css("border", "2px solid red");
        });
        $(".hover-me").hover(function () {
          $(this).hide();
        });
        $("h3").mouseenter(function () {
          $(this).text("Mouse Entered");
        });
        $("h1[name='keydown']").mouseenter(function () {
          $(this).css("float", "right");
        });
        $("input").focus(function () {
          $(this).val("roman");
        });
      });
    </script>
  </body>
</html>
