<?php
/**
 * Created by PhpStorm.
 * User: rahi.adel
 * Date: 2/15/2018
 * Time: 5:13 PM
 */

class ArticleModel
{

    public function GetInformationArticle()
    {
        $db = new db();
        $query = $db->query("SELECT * FROM tbl_article ORDER BY id_article DESC");
        $result = $query->fetch_assoc();
        if ($result !== null) {
            $data = $result;
            return $data;
        } else {
            $data = array();
            return $data;
        }
    }
    public function GetInformationArticleByID($id)
    {
        $db = new db();
        $query = $db->query("SELECT * FROM tbl_article WHERE id_article = '{$id}'");
        $result = $query->fetch_assoc();
        if ($result !== null) {
            $data = $result;
            return $data;
        } else {
            $data = array();
            return $data;
        }

    }
}