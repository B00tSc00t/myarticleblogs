<?php

require 'includes/init.php'; // can use 'include' instead but that means the code still runs. This can be an issue

$conn = require 'includes/db.php';

// helps with security. Make sure the query string is being used && the value is a number
if (isset($_GET['id'])) {
    $article = Article::getWithCategories($conn, $_GET['id'], true);
} else {
    $article = null;
}

?>
<?php require 'includes/header.php'; ?>
<?php if ($article): ?>
    
    <article>
        <h2><?= htmlspecialchars($article[0]['title']); ?></h2>

        <time datetime="<?= $article[0]['published_at'] ?>"><?php 
            $datetime = new DateTime($article[0]['published_at']);
            echo $datetime->format("j F, Y");
        ?></time>

        <?php if ($article[0]['category_name']) : ?>
            <p>Categories:
                <?php foreach ($article as $a) : ?>
                    <?= htmlspecialchars($a['category_name']); ?>
                <?php endforeach; ?>
            </p>
        <?php endif; ?>

        <?php if ($article[0]['image_file']) : ?>
            <img src="/uploads/<?= $article[0]['image_file']; ?>">
        <?php endif; ?>

        <p><?= htmlspecialchars($article[0]['content']); ?></p>
    </article>

<?php else: ?>
    <p>Nothing to display sucker!</p>
<?php endif; ?>

<?php require 'includes/footer.php'; ?>