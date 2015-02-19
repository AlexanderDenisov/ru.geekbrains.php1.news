<?php
require_once __DIR__ . '/../function/sql.php';
require_once __DIR__ . '/../function/file.php';
//Это модель.

//функция получения всех новостей.
function News_getAll()
{
    $sql = 'SELECT * FROM news ORDER BY date';
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

function News_getAll_Path()
{
    $sql = 'SELECT path FROM news ORDER BY date';
    return SQL_Query($sql);
}

?>