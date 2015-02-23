<?php
require_once __DIR__ . '/../function/Database.php';
require_once __DIR__ . '/../function/file.php';
//Модель.
//функция получения всех новостей.
function News_getAll()
{
    $db = new Database();
    $sql = 'SELECT * FROM news ORDER BY date DESC';
    return $db->getAll($sql);
}

//Функция добавления в БД
function News_insert($data)
{
    $db = new Database();
    $sql = "INSERT INTO news
	(date, title, path)
	VALUES
	('" . $data['date'] . "','" . $data['title'] . "', '" . $data['news'] . "')";
    return $db->insert($sql);
}

//Функция получения новости из БД по id
function News_getOnlyChosen($news_id)
{
    $db = new Database();
    $sql = 'SELECT date, title, path FROM news Where id='.$news_id.'';
    return $db->onlyChosen($sql);
}

?>
