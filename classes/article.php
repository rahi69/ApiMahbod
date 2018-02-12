<?php

class article
{
    public function __construct()
    {
        require_once $_SERVER["DOCUMENT_ROOT"] . "/ApiMahbod/config/db.php";

    }

    /**
     *
     */
    public function GetArticleList()
    {
        $statusCode = new codeStatus();
        $data = [];
        $db = new db();
        $db->connection();
//        $page = intval($_POST['page']) - 1;
//        $offset = $page * 5;
        $query = $db->query("SELECT * FROM tbl_article ORDER BY id_article DESC");
        $result = $query->fetch_all();
        if ($result != null) {
            $data = $result;
            $statusCode->get_http_message("200");
        } else {
            $data = array();
            $statusCode->get_http_message("404");
        }
        $requestContentType = $_SERVER['HTTP_ACCEPT'];
        $statusCode->set_http($requestContentType, $statusCode);
        if (strpos($requestContentType, 'application/json') != false) {
            echo json_encode(array('Data' => $data, 'Code' => '200', 'Message' => 'Sucess Request'));
            exit;

        } else {
            echo json_encode(array('Code' => '404', 'Message' => 'NotFound !!'));
            exit;
        }
    }

    public function GetArticleByID()
    {
        $statusCode = new codeStatus();
        $data = [];
        $db = new db();
        $db->connection();
        $id = intval($_POST['id_article']);
        $query = $db->query("SELECT * FROM tbl_article WHERE id_article = '{$id}'");
        $result = $query->fetch_all();
        if ($result != null) {
            $data = $result;
            $statusCode->get_http_message("200");

        } else {
            $data = array();
            $statusCode->get_http_message("404");

        }

        $requestContentType = $_SERVER['HTTP_ACCEPT'];
        $statusCode->set_http($requestContentType, $statusCode);
        if (strpos($requestContentType, 'application/json') != false) {
            echo json_encode(array('Data' => $data, 'Code' => '200', 'Message' => 'Sucess Request'));
            exit;

        } else {
            echo json_encode(array('Code' => '404', 'Message' => 'NotFound !!'));
            exit;
        }
    }

}
//$r=$_SERVER["DOCUMENT_ROOT"];
//echo $r;
////exit();
