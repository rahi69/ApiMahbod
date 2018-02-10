<?php
class article{
    /**
     *
     */
    public function GetArticleList()
    {
        $statusCode = new codeStatus();
        $data = [];
        require_once $_SERVER["DOCUMENT_ROOT"] . "/ApiMahbod/config/db.php";
        $db = new db();
        $db->connection();
//        $page = intval($_POST['page']) - 1;
//        $offset = $page * 5;
        $query = $db->query("SELECT * FROM tbl_article ORDER BY id_article DESC");
        $result = $query->fetch_all();
        if ($result != null) {
            $data["result"] = $result;
            $statusCode->get_http_message("200");

        } else {
            $data["result"] = "0";
            $statusCode->get_http_message("404");
        }
        $requestContentType = $_SERVER['HTTP_ACCEPT'];
        $statusCode->set_http($requestContentType, $statusCode);
        if (strpos($requestContentType, 'application/json') !== false) {
            echo json_encode($data);

        }
    }
    public function GetArticleByID($id)
    {
        $statusCode = new codeStatus();
        $data=[];
      require_once $_SERVER["DOCUMENT_ROOT"] . "/ApiMahbod/config/db.php";
      $db= new db();
      $db->connection();
//    $id = $function->escape_string($_GET['edit_article']);
//      $id = intval($_POST['id_article']);
      $query=$db->query("SELECT * FROM tbl_article WHERE id_article = '{$id}'");
      $result=$query->fetch_all();
      if($result!=null)
      {
          $data["result"] = $result;
          $statusCode->get_http_message("200");

      }
      else
      {
          $data["result"]="0";
          $statusCode->get_http_message("404");

      }

        $requestContentType = $_SERVER['HTTP_ACCEPT'];
        $statusCode->set_http($requestContentType, $statusCode);
        if (strpos($requestContentType, 'application/json') !== false) {
            echo json_encode($data);

        }
    }

}
//$r=$_SERVER["DOCUMENT_ROOT"];
//echo $r;
////exit();
