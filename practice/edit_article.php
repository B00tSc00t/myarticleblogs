<?php

require 'classes/Database.php';
require 'classes/Article.php';
require 'includes/article.php';
require 'includes/url.php';

$db = new Database();
$conn = $db->getConn();

if (isset($_GET['id'])) {

		$article = Article::getByID($conn, $_GET['id']);

		if ( ! $article) {

				die("Article not found");

		} 
		
} else {
	die("ID not supplied, article not found.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $article->title = $_POST['title'];
  $article->content = $_POST['content'];
  $article->published_at = $_POST['published_at'];

  $errors = validateArticle($article->title, $article->content, $article->published_at);
  
  if (empty($errors)) {

    $sql = "UPDATE article
            SET title = ?,
                content = ?,
                published_at = ?
            WHERE id = ?";
    
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt === false) {

      echo mysqli_error($conn);

    } else {
        
      if ($published_at == '') {
        $published_at = date('Y-m-d H:i:s');
      }
        // "sssi" = str, str, str, int
        mysqli_stmt_bind_param($stmt, "sssi", $title, $content, $published_at, $id);

        if (mysqli_stmt_execute($stmt)) {
          redirect("/article.php?id=$id");
      } else {
        echo mysqli_stmt_error($conn);
      }
    }
	}
}

?>
<?php require "includes/header.php"; ?>
<a href="index.php">Index</a>

<h2>Edit Article</h2>

<?php require "includes/article_form.php"; ?>

<?php require "includes/footer.php"; ?>