<?php

class Gallery
{

    public function __construct()
    {
        //print_r("jgfghjhj");exit;
        require_once '../config/config.php';
        require_once '../validation/ValidationApi.php';
        require_once '../model/GalleryModel.php';
        require_once $_SERVER["DOCUMENT_ROOT"] . "/ApiMahbod/config/db.php";
        $this->Validation = new ValidationApi();
        $this->GalleryModel = new GalleryModel();

    }

    public function GetInfoGallery()
    {
        $Type = $_POST['Type'];
        $FinalType = $this->Validation->CheckParamGallery($Type);
//        $FinalType = $this->Validation->CheckParamString($Type);
        if ($FinalType == false) {
            echo json_encode(array('Code' => '400', 'Message' => 'Bad Request !!'));
            exit;
        } else {
            $Param = $this->ParamSearch($FinalType);
            $Response = $this->GalleryModel->GetInformationGallery($Param);
            echo json_encode(array('Data' => $Response, 'Code' => '200', 'Message' => 'Success Request'));
            exit;
        }
    }

    private function ParamSearch($Param)
    {
        $ParamSearch = array(1);
        if ($Param >= 1) {
            $ParamSearch[] = '`type` = ' . $Param . '';
        }
        return $ParamSearch;
    }

}