<?php
?>
<html>
<body>
<?php if(! empty($articles)) : ?>
    <?php foreach ($articles as $article) : ?>

        <h1>
            <?= $article['title'] ?>
        </h1>

        <h3>
            <?= $article['id'] ?>
        </h3>

    <?php endforeach ;?>
<?php endif ;?>
</body>
</html>