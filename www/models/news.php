<?php
require_once __DIR__ . '/../function/sql.php';
require_once __DIR__ . '/../function/file.php';
//Это модель.

//функция получения всех новостей.
function News_getAll()
{
    $sql = 'SELECT * FROM news ORDER BY date DESC';
    return SQL_Query($sql);
}

function News_insert($data)
{
    $sql = "INSERT INTO news
	(date, title, path)
	VALUES
	('" . $data['date'] . "','" . $data['title'] . "', '" . $data['news'] . "')
	";
    SQL_exec($sql);
}

function News_getOnlyChoosen()
{
    if(isset($_GET['id'])) {
        $news_id = $_GET['id'];
        $sql = 'SELECT date, title, path FROM news Where id='.$news_id.'';
        return SQL_Query($sql);
} else {
    return false;
    }
}

?>