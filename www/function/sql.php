<?php

//функция соединения с БД.
function SQL_Connect()
{
    mysql_connect('localhost', 'root', '');
    mysql_select_db('test');
}

//функция запроса к БД.
function SQL_Query($sql)
{
    SQL_Connect();
    //$sql = 'SELECT * FROM news ORDER BY date';
    $res = mysql_query($sql);

    $ret = [];
    while (false !== $row = mysql_fetch_assoc($res)) {
        $ret[] = $row;
    }

    return $ret;
}

function SQL_exec($sql)
{
    SQL_Connect();
    mysql_query($sql);
}


?>