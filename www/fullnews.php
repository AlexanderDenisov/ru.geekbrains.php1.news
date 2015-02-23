<?php
//вывод отдельной новости

require_once __DIR__ . '/models/news.php';

if(!isset($_GET['id'])) {
    echo 'Такой новости нет.';
    die;
} else {
    $news_id = $_GET['id'];
    $full_news = News_getOnlyChoosen($news_id);
}

include __DIR__ . '/views/fullnews.php';


?>