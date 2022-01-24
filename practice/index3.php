<?php

$db_host = "localhost";
$db_name = "cms";
$db_user = "cms_www";
$db_pass = "a[L)02JPPMGsh!R!";

// Must be in this order to connect
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_error()) {
	echo mysqli_connect_error();
	exit;
}

echo "Connected successfully.";

// Write SQL to pull data form the database
$sql = "SELECT * FROM article ORDER BY content;";

// Send the request to the database
$results = mysqli_query($conn, $sql);

if ($results === false) {
	echo mysqli_error($conn);
} else {
	$articles = mysqli_fetch_all($results, MYSQLI_ASSOC); // mysqli_assoc makes the data look cleaner
	var_dump($articles);
}

<?php

if (isset($_GET['id'])) {
	$article = getArticle($conn, $_GET['id']);
	
	if ($article) {
		$id = $article['id'];
		$title = $article['title'];
		$content = $article['content'];
		$published_at = $article['published_at'];
	} else {
		die("Article not found");
	}
} else {
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
		mysqli_stmt_bind_param($stmt, "sssi", $title, $content, $published_at, $id);
		if (mysqli_stmt_execute($stmt)) {
			if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
				$protocol = 'https';
			} else {
				$protocol = 'http';
			}
			header("Location: $protocol://" . $_SERVER['HTTP_HOST'] . "/article.php?id=$id");
			exit;
		} else {
			echo mysqli_stmt_error($conn);
		}
	}
}
