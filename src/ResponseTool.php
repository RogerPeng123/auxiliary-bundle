<?php

namespace Roger\AuxiliaryTool\Bundle;

use Roger\AuxiliaryTool\Bundle\Response\ResponseClass;

class ResponseTool
{
    public static function responseJson($data, $message = 'success', $code = 200): ResponseClass
    {
        $ResponseClass = new ResponseClass();

        $ResponseClass->setCode($code);
        $ResponseClass->setMessage($message);
        $ResponseClass->setData($data);

        return $ResponseClass;
    }
}