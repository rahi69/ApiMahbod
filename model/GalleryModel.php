<?php
/**
 * Created by PhpStorm.
 * User: Ms
 * Date: 14/02/2018
 * Time: 04:16 PM
 */

class GalleryModel
{
    public function __construct()
    {
        require_once $_SERVER["DOCUMENT_ROOT"] . "/ApiMahbod/config/db.php";
    }

    public function GetInformationGallery($Param)
    {
        $db = new db();
        $Sql = 'SELECT * FROM `tblgallery` WHERE `type` =' . implode(' AND ', $Param) . 'ORDER BY id DESC';
        $Query = $db->query($Sql);
        $result = $Query->fetch_assoc();
        if ($result !== null) {
            $data = $result;
            return $data;
        } else {
            $data = array();
            return $data;
        }
    }
}