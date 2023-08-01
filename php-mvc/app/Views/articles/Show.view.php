<?php
?>

<html>
<body>
<?php if (! empty($article)) : ?>
    <h2>
        <?= $article['title']?>

    </h2>
    <p>
        <?= $article['descreption'];?>
    </p>
    <p>
        <a href="/"> All Articles</a>
    </p>
<?php else: echo "No Article Found"?>


<?php endif?>

</body>
</html>