<?php
/**
 * Created by PhpStorm.
 * User: rahi.adel
 * Date: 2/15/2018
 * Time: 5:53 PM
 */

class AboutModel
{
 public function GetInformationAbout()
 {
     $db = new db();
     $query = $db->query("SELECT * FROM tbl_aboutme ORDER BY id DESC");
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