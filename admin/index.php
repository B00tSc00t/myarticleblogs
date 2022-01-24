<?php
// In .htaccess: That line is used to add more security in case there are problems with the server...
// Without this the end user could potentially get access to your entire code, which includes passwords!!!
require '../includes/init.php';

Auth::requireLogin();

$conn = require '../includes/db.php';

$paginator = new Paginator($_GET['page'] ?? 1, 5, Article::getTotal($conn));

$articles = Article::getPage($conn, $paginator->limit, $paginator->offset);

?>
<?php require '../includes/header.php'; ?>

<h2>Administration</h2>

<p><a href="new_article.php">New Article</a></p>

<?php if (empty($articles)): ?>

    <p>Nothing to display sucker!</p>

<?php else : ?>
    <table class="table">
        <thead>
            <th>Title</th>
            <th>Published</th>
        </thead>
        <tbody>
            <?php foreach ($articles as $article) : ?>
                <tr>
                    <td>
                        <a href="article.php?id=<?= $article['id']; ?>"><?= htmlspecialchars($article['title']); ?></a></h2>
                    </td>
                    <td>
                        <?php if ($article['published_at']) : ?>
                            <time><?= $article['published_at'] ?></time>
                        <?php else : ?>
                            Unpublished
                            <button class="publish" data-id="<?= $article['id'] ?>">Publish</button>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <?php require '../includes/pagination.php'; ?>

<?php endif; ?>
<?php require '../includes/footer.php'; ?>