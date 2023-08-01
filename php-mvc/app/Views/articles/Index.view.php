<?php
?>

<html>
<body>
<?php if (! empty($articles)) :?>
    <?php foreach ($articles as $article) : ?>
        <h2>
            <?= $article['title']?>

        </h2>
        <p>
            <?= $article['descreption'];?>
        </p>
        <p>
            <a href="/article?id=<?= $article['id']; ?>"> Show Article</a>
            <a href="/article/edit?id=<?= $article['id']; ?>"> Edit Article</a>
            <a href="/article/delete?id=<?= $article['id']; ?>"> Delete This Article</a>


        </p>
    <?php endforeach; ?>
<?php endif?>

<a href="articles/create">Creat An Article</a>
</body>
</html>