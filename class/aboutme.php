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
        require_once '../config/config.php';
//        require_once '../validation/ValidationApi.php';
        require_once '../model/AboutModel.php';
        require_once $_SERVER["DOCUMENT_ROOT"] . "/ApiMahbod/config/db.php";
//        $this->Validation = new ValidationApi();
        $this->AboutModel = new AboutModel();
    }

    /**
     *
     */
    public function GetAboutList()
    {
        $Response = $this->AboutModel->GetInformationAbout();

        if ($Response == false) {
            echo json_encode(array('Code' => '400', 'Message' => 'NotFound !!'));
            exit;
        } else {
            echo json_encode(array('Data' => $Response, 'Code' => '200', 'Message' => 'Success Request'));
            exit;
        }
    }
}