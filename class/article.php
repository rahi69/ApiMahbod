<?php

class article
{
    public function __construct()
    {
        require_once '../config/config.php';
        require_once '../validation/ValidationApi.php';
        require_once '../model/ArticleModel.php';
        require_once $_SERVER["DOCUMENT_ROOT"] . "/ApiMahbod/config/db.php";
        $this->Validation = new ValidationApi();
        $this->ArticleModel = new ArticleModel();
    }

    /**
     *
     */
    public function GetArticleList()
    {
        $Response = $this->ArticleModel->GetInformationArticle();

        if ($Response == false) {
            echo json_encode(array('Code' => '400', 'Message' => 'NotFound !!'));
            exit;
        } else {
            echo json_encode(array('Data' => $Response, 'Code' => '200', 'Message' => 'Success Request'));
            exit;
        }
    }

    public function GetArticleByID()
    {
        $id = $_POST['id_article'];
        $FinalId = $this->Validation->CheckParamArticle($id);
        if ($FinalId == false) {
            echo json_encode(array('Code' => '400', 'Message' => 'Bad Request !!'));
            exit;
        } else {
            $Response = $this->ArticleModel->GetInformationArticleByID($FinalId);
            echo json_encode(array('Data' => $Response, 'Code' => '200', 'Message' => 'Success Request'));
            exit;
        }
    }
}
