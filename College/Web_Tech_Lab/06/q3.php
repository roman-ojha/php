<!DOCTYPE html>
<html>
  <head>
    <title>jQuery Effects</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
      #box {
        background-color: #007bff;
        color: white;
        width: 200px;
        height: 200px;
        display: none;
        margin: 50px auto;
        text-align: center;
        line-height: 200px;
        font-size: 24px;
        border-radius: 50%;
      }
    </style>
  </head>
  <body>
    <button id="btnFadeIn">Fade In</button>
    <button id="btnFadeOut">Fade Out</button>
    <button id="btnFadeToggle">Fade Toggle</button>
    <button id="btnSlideToggle">Slide Toggle</button>
    <button id="btnAnimate">Animate</button>

    <div id="box">Hello, world!</div>

    <script>
      $(document).ready(function () {
        $("#btnFadeIn").click(function () {
          $("#box").fadeIn();
        });

        $("#btnFadeOut").click(function () {
          $("#box").fadeOut();
        });

        $("#btnFadeToggle").click(function () {
          $("#box").fadeToggle();
        });

        $("#btnSlideToggle").click(function () {
          $("#box").slideToggle();
        });

        $("#btnAnimate").click(function () {
          $("#box").animate({
            opacity: "toggle",
            left: "250px",
            height: "+=150px",
            width: "+=150px",
          });
        });
      });
    </script>
  </body>
</html>
