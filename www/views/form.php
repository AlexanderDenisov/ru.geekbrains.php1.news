<form action="/add.php" method="post" enctype="multipart/form-data">
    <label for="title">Название статьи</label>
    <input type="text" id="title" name="title">
    <input type="hidden" id="news" name="date" value="<?php $today = date('d.m.Y');
    echo $today; ?>"/>
    <label for="news">Файл</label>
    <input type="file" id="news" name="news">
    <input type="submit">
</form>