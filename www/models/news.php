<?php
require_once __DIR__ . '/../function/Database.php';
require_once __DIR__ . '/../function/file.php';
//Это модель.
//функция получения всех новостей.
function News_getAll()
{
    $db = new Database();
    return $db->getAll('news');
}

function News_insert($data)
{
    $db = new Database();
    return $db->insert($data);
}

function News_getOnlyChoosen($news_id)
{
    $db = new Database();
        return $db->onlyChoosen($news_id);
}

?>