<?php
/**
 * Created by PhpStorm.
 * User: Kevensuu
 * Date: 2016-09-20 20:23
 */

class ErrorController extends BaseController
{
    public function errorAction()
    {
        header( "HTTP/1.1 404 Not Found" );
        header( "Status: 404 Not Found" );
        return TRUE;
    }
}