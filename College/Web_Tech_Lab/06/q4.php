<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Json example</title>
    <script
      type="text/javascript"
      src="https://code.jquery.com/jquery-3.5.1.min.js"
    ></script>
  </head>
  <body>
    <p>Select one of the provience to get the detail about visiting place</p>
    <div id="provience-container">
      <input type="radio" id="1" name="provience" />
      <label for="1">Provience 1</label>
      <input type="radio" id="2" name="provience" />
      <label for="2">Provience 2</label>
      <input type="radio" id="3" name="provience" />
      <label for="3">Provience 3</label>
      <input type="radio" id="4" name="provience" />
      <label for="4">Provience 4</label>
    </div>
    <p>Selectan option to see the list of place where you can visit:</p>
    <p id="provience-districts"></p>
    <script type="text/javascript">
      $(document).ready(function () {
        $.getJSON("data.json", function (jd) {
          data = jd;
        });
        $("input[name='provience']").click(function (event) {
          let id = event.target.id;
          let htmlData = "";
          const destinationList = data.destination[id - 1].destinationList;
          for (let i = 0; i < destinationList.length; i++) {
            htmlData += `${destinationList[i]}, `;
          }
          $("#provience-districts").html(htmlData);
        });
      });
    </script>
  </body>
</html>
