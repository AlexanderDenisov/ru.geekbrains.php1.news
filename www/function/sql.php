<?php
class Database
{
    public function __construct()
    {
        mysql_connect('localhost', 'root', '');
        mysql_select_db('test');
    }

    protected function query($sql)
    {
        $result = mysql_query($sql);
        $data = [];
        while (false !== ($row = mysql_fetch_assoc($result))) {
            $data[] = $row;
        }
        return $data;
    }
    protected function exec($sql)
    {
        $result = mysql_query($sql);
        return $result;
    }
    public function getAll($table)
    {
        $sql = 'SELECT * FROM ' . $table . ' ORDER BY date DESC';
        return $this->query($sql);
    }
    public function onlyChoosen($news_id)
    {
        $sql = 'SELECT date, title, path FROM news Where id='.$news_id.'';
        return $this->query($sql);
    }
    public function insert($data)
    {
        $sql = "INSERT INTO news
	(date, title, path)
	VALUES
	('" . $data['date'] . "','" . $data['title'] . "', '" . $data['news'] . "')";
        return $this->exec($sql);
    }
}

?>