<?php
/**
 * Created by PhpStorm.
 * User: Ms
 * Date: 14/02/2018
 * Time: 04:07 PM
 */

class ValidationApi
{
    public function CheckParamGallery($Type)
    {

        if (!intval($Type)) {
            return $Type;
        } else {
            return false;
        }

    }
}