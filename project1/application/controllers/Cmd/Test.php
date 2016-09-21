<?php
/**
 * Created by PhpStorm.
 * User: Kevensuu
 * Date: 2016-09-21 16:41
 */

/**
 * Class Cmd_TestController
 * @desc
 */
class Cmd_TestController extends BaseController
{

    /**
     * @desc
     *
     * WEB OPEN : http://yaf.test.com/cmd_test/one
     *
     * CMD RUN : php cli.php "request_uri=/cmd_test/one"
     *
     * @return bool
     */
    public function oneAction()
    {
        echo 111;
        return false;
    }
}