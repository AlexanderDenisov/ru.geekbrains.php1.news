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

    public function getAll($sql)
    {
        return $this->query($sql);
    }

    public function onlyChosen($sql)
    {
        return $this->query($sql);
    }

    public function insert($sql)
    {
        return $this->exec($sql);
    }
}

?>