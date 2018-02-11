<?php
include_once '../config/config.php';

class Gallery
{
    public function GetGalleryContact($type)
    {
        global $config;
        switch ($type)
        {
            case 0 : $type = $config["type"][0];break;
            case 1 : $type = $config["type"][1];break;
            case 2 : $type = $config["type"][2];break;
            default: $type = $config["type"][0];break;
        }
        $statusCode = new codeStatus();
        $data = [];
        require_once $_SERVER["DOCUMENT_ROOT"] . "/ApiMahbod/config/db.php";
        $db = new db();
        $db->connection();
//        $page = intval($_POST['page']) - 1;
//        $offset = $page * 5;
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
        if (strpos($requestContentType, 'application/json') !== false) {
            echo json_encode($data);

        }
    }

}

