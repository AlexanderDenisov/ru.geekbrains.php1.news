<?php
require __DIR__ . '/models/news.php';
require __DIR__ . '/function/Article.php';

//Контроллер, обрабатывает запрос из формы добавления новости.
if (!empty($_POST)) {
    $data = [];
    if (!empty($_POST['title'])) {
        $data['title'] = $_POST['title'];
    }
    if (!empty($_POST['date'])) {
        $data['date'] = $_POST['date'];
    }
    if (!empty($_FILES)) {
        $a = new NewsArticle();
        $res = $a->File_upload('news');
        if (false !== $res) {
            $data['news'] = $res;
        }
    }
    if (isset($data['date']) && isset($data['title']) && isset($data['news'])) {
        News_insert($data);
        header('Location: /index.php');
        die;
    }
}
include __DIR__ . '/views/add.php';
?>