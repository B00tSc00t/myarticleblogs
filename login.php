<?php

require 'includes/init.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $conn = require 'includes/db.php';
  
  if (User::authenticate($conn, $_POST['username'], $_POST['password'])) {

    Auth::login();

    Url::redirect('/project01_myarticleblogs');

  } else {

    $error = "Login incorrect!";

  }
}

?>

<?php require 'includes/header.php'; ?>

<h2>Login</h2>

<?php if (! empty($error)) : ?>
  <P><?= $error ?></P>
<?php endif; ?>

<form method="post">

  <div class="form-gorup">
    <label for="username">Username</label>
    <input name="username" id="username" autofocus="autofocus" class="form-control">
  </div>

  <div class="form-gorup">
    <label for="password">Password</label>
    <input type="password" name="password" id="password" class="form-control">
  </div>

<button class="btn">Login</button>

</form>

<?php require 'includes/footer.php'; ?>