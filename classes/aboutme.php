<?php
/**
 * Created by PhpStorm.
 * User: rahi.adel
 * Date: 2/9/2018
 * Time: 5:32 PM
 */

class aboutMe
{
    public function __construct()
    {
        require_once $_SERVER["DOCUMENT_ROOT"] . "/ApiMahbod/config/db.php";

    }
    public function GetAboutMeList()
    {
        $statusCode = new codeStatus();
        $data = [];
        $db = new db();
        $db->connection();
//        $page = intval($_POST['page']) - 1;
//        $offset = $page * 5;
        $query = $db->query("SELECT * FROM tbl_aboutme ORDER BY id DESC");
        $result = $query->fetch_all();
        if ($result != null) {
            $data= $result;
            $statusCode->get_http_message("200");

        } else {
            $data=array();
            $statusCode->get_http_message("404");

        }

        $requestContentType = $_SERVER['HTTP_ACCEPT'];
        $statusCode->set_http($requestContentType, $statusCode);
        if (strpos($requestContentType, 'application/json') != false) {
            echo json_encode(array('Data' => $data, 'Code' => '200', 'Message' => 'Sucess Request'));
            exit;
        }
        else{
            echo json_encode(array('Code' => '200', 'Message' => 'Sucess Request'));
            exit;
        }

    }
}