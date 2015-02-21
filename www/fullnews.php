<?php
//вывод отдельной новости

require_once __DIR__ . '/models/news.php';

$full_news = News_getOnlyChoosen();

include __DIR__ . '/views/fullnews.php';


?>