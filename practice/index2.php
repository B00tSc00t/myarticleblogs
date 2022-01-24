<?php
$name = "Rick";
$hour = 17; // php comments are not sent to the browser
/*
These tags are used to span more than one line
if needed.
*/
$fruits = ['apple', 'banana', 'orange', 'mango'];
?>
<!DOCTYPE html>
<html>
<head>
  <title>My page</title>
  <meta charset="utf-8">
</head>
<body>
  <!-- Comment tag in html -->
  <h1>Loren Ipsum</h1>
  <p>Hello, <?= $name; ?>!</p>

<?php if ($hour < 12): ?>
  Morning sucker!
<?php elseif ($hour < 18): ?>
  Afternoon fish!
<?php elseif ($hour < 22): ?>
  Evening taco!
<?php else: ?>
  You should be sleeping!!!
<?php endif; ?>

<!-- Create an ordered list with php -->
<?php echo "<ol>";
  foreach($fruits as $fruit) {
    echo "<li>".$fruit."</li>";
  }
  echo "</ol>";
?>

<?php echo "<ol>";
foreach($fruits as $fruit):
    echo "<li>".$fruit."</li>";
endforeach; 
  echo "</ol>";
?>

</body>
</html>