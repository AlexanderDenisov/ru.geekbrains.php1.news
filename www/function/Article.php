<?php

abstract class Article {
    public $title;
    public $text;

    abstract public function File_upload($field);
}

class NewsArticle extends Article
{
    public function File_upload($field)
    {
        if (empty($_FILES))
            return false;
        if (0 != $_FILES[$field]['error'])
            return false;
        if (is_uploaded_file($_FILES[$field]['tmp_name'])) {
            $res = move_uploaded_file($_FILES[$field]['tmp_name'], __DIR__ . '/../news/' . $_FILES[$field]['name']);
            if (!$res) {
                return false;
            } else {
                return '/news/' . $_FILES[$field]['name'];
            }
        }
        return false;
    }
}
?>