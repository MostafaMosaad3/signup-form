<html>
<body>
<form method="post" action="/article/update">
    <input type="hidden" name="id" value="<?= $article['id']?>">
    <h2>
        Create An Article
    </h2>
    Title : <input type="text" name="title" value="<?= $article['title']?>">
    Descreption : <input type="text" name="descreption" value="<?= $article['descreption']?>">
    <button name="send">update</button>
</form>
</body>
</html>