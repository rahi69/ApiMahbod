<?php
require_once '../config/config.php';

class gallery
{
    public function __construct()
    {
        require_once $_SERVER["DOCUMENT_ROOT"] . "/ApiMahbod/config/db.php";

    }

    public function GetGalleryContact()
    {
       $type = $_POST['type'];
//        switch ($type)
//        {
//            case 0 : $type = $config["type"][0];break;
//            case 1 : $type = $config["type"][1];break;
//            case 2 : $type = $config["type"][2];break;
//            default: $type = $config["type"][0];break;
//        }
//        if($type==null)
//        {
//        }
        $statusCode = new codeStatus();
        $data=array();
        $db = new db();
        $db->connection();
//        $page = intval($_POST['page']) - 1;
//        $offset = $page * 5;
        if($type == 0){
            $query = $db->query("SELECT * FROM tblgallery ORDER BY id DESC");
        }else {
            $query = $db->query("SELECT * FROM `tblgallery` WHERE `type` =" . $type . "ORDER BY id DESC");
        }$result = $query->fetch_assoc();
        if ($result !== null) {
            $data = $result;
            echo $statusCode->get_http_message("200");
            exit;
        }
        else {
            $data = array();
            echo $statusCode->get_http_message("404");
            exit();
        }

//        $requestContentType = $_SERVER['HTTP_ACCEPT'];
//        $statusCode->set_http($requestContentType, $statusCode);
//        if (strpos($requestContentType, 'application/json') != false) {
//            echo json_encode($data);
//        }

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







        /*****************
        $query = $db->query("SELECT * FROM tblgallery WHERE $type ORDER BY id DESC");
        $result = $query->fetch_all();
        if ($result != null)
        {
            $data["result"] = $result;
            $statusCode->get_http_message("200");
        }

        else {
            $data["result"] = "0";
            $statusCode->get_http_message("404");
        }

        $requestContentType = $_SERVER['HTTP_ACCEPT'];
        $statusCode->set_http($requestContentType, $statusCode);
        if (strpos($requestContentType, 'application/json') != false) {
            echo json_encode($data);

        }
    }

}

*********/