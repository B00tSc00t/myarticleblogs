<?php 

$posts = [1 => 'Good news', 3 => 'Read this', 5 => 'Important announcement'];
?>

<?php foreach ($posts as $id => $title): ?>
        
  <li><a href="post.php?id=<?= $id ?>"><?= $title ?></a></li>
<?php endforeach; ?>

<!-- // string
// $message = "Hello again!";
// $firstName = "Rick";
// int
// $count = 3;

// float
// $price = 1.99;

// boolean
// $isLoggedIn = true;

//null
// $isNull = null;

// displays what type if variable
 // var_dump($message, $count, $price, $isLoggedIn, $isNull);

// similare to console.log
//  echo $price * $count;

// new line break
// echo "<br>";

// concat with a . (period)
// echo $message . " " . $firstName;

// true "or" false = true
// true "and" false = false

// $days = "Monday Tuesday Wednesday";
// echo $days;
// echo "<br>";

// $days = "Monday Tuesday Wednesday";
// echo $days;

// Variable interpolation
// echo "Hello $firstName";

// arrays 
// $articles =[
//   ["title" => "first post", "content" => "This is first"],
//   ["title" => "second post", "content" => "This is the second"],
//   ["title" => "third post", "content" => "This is the third"]
// ];

// var_dump($articles[1]["title"]);

// echo "<br>";
// $values = [$count, $price];

// var_dump($values);
// echo "<br>";

// $arts = [ "one art", "two arts", "three arts"];

// foreach ($arts as $index => $art) {
//   echo $index . ' - ' . $art, ", ";
// }

// echo "<br>";

// $stuff = [];

// if (empty($stuff)) {
//   echo "Array is empty.";
// } else {
//   echo "Array contains junk!";
// }

// echo "<br>";
// $age = 41;
// if ($age >= 41) {
//   echo "condition is true";
// } else {
//   echo "condition is false";
// }

// $month = 1;
// while ($month <= 12) {
//   echo "<br>" . $month;
//   $month = $month + 1;
// }

// echo "<br>";
// for ($i = 1; $i <= 10; $i ++) {
//   echo "<br>" . $i;
// }

// echo "<br>";

// $hour = 23;
// if ($hour < 12) {
//   echo "Morning sucker!";
// } elseif ($hour < 18) {
//   echo "Afternoon fish!";
// } elseif ($hour < 22) {
//   echo "Evening taco!";
// } else {
//   echo "You should be sleeping!!!";
// }
// echo "<br>";

// $day = "Tue";
// switch ($day) {
//   case "Mon":
//     echo "Monday";
//     break;
//   case "Tue":
//     echo "Tuesday";
//     break;
//   case "Wed":
//     echo "Wednesday";
//     break;
//   case "Thur":
//     echo "Thursday";
//     break;
//   case "Fri":
//     echo "Friday";
//     break;
//   case "Sat":
//     echo "Saturday";
//     break;
//   case "Sun":
//     echo "Sunday";
//     break;
//   default:
//   echo "That's the end.";
//   break;
// }

// $array = [];

// for ($i = 1; $i <= 10; $i++) {
//   if ($i < 4) {
//     $array[] = "a";
//     echo $array[0];
//   } elseif ($i <=7) {
//     $array[] = "b";
//     echo $array[3];
//   } else {
//     $array[] = "c";
//     echo $array[7];
//   }
// }

// $posts = [1 => 'Good news', 3 => 'Read this', 5 => 'Important announcement'];
 -->
