<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   var_dump($_POST);
// }

?>

<!DOCTYPE html>
<html>
<head>
  <title>Forms</title>
  <meta charset="utf-8">
</head>
<body>

<!-- A form without an action submits the form back to itself
The query string is sent to the address line. -->
<!-- Use "post" method so the data sent isn't visible in the query string. -->
<form method="post">
<fieldset>
  <legend>Article</legend>
  <div>
    <label>Title:<input type="text" name="title" placeholder="Title" readonly></label>
  </div>
  <div>
    <label>Content:<textarea name="content" rows="4" cols="40" placeholder="Content" autofocus required></textarea></label>
  </div>
  <div>
    <label>Language
      <select name="lang">
        <option value="en">English</option>
        <option value="fr">French</option>
        <option value="es">Spanish</option>
      </select>
    </label>
  </div>
</fieldset>
<fieldset>
  <legend>Attributes</legend>
  <div>
    <label><input type="checkbox" name="visible" value="yes">Visible</label>
  </div>
</fieldset>
<fieldset>
  <legend>Color</legend>
    <label><input type="radio" name="color" value="blue" checked>Blue</label><br>
    <label><input type="radio" name="color" value="red" disabled>Red</label><br>
    <label><input type="radio" name="color" value="green">Green</label>
</fieldset>
<button>Send</button>

</form>
<!-- <script>
var dt = new Date();
document.getElementById('date-time').innerHTML=dt;
</script>
<p>current<span id='date-time'></span></p> -->
<!-- Current Date:
<input type="text" id="date-time">
 
<script>
  var today = new Date();
  var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
  document.getElementById("date_time").value = date;
</script> -->

<input type="text" id="currentDateTime">
<script>
  var today = new Date();
  var date = today.getFullYear()+ '-'+(today.getMonth()+1)+'-'+today.getDate();
  var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
  var dateTime = date+' '+time;
  document.getElementById("currentDateTime").value = dateTime;
</script>

</body>
</html>