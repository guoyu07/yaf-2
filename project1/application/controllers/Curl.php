<?php
/**
 * Created by PhpStorm.
 * User: Kevensuu
 * Date: 2016-09-21 19:42
 */

use Curl\Curl;

/**
 * Class CurlController
 * @desc    Curl operation example
 */
class CurlController extends BaseController
{
    public function testAction()
    {
        $url = 'http://www.baidu.com';

        $curl = new Curl();
        $curl->setOpt(CURLOPT_PROXYTYPE, CURLPROXY_HTTP);
        $curl->setOpt(CURLOPT_PROXY, '119.6.136.122:80');
        $curl->setOpt(CURLOPT_USERAGENT, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.0.2785.116 Safari/537.36');
        $curl->setOpt(CURLOPT_CONNECTTIMEOUT, 30);
        $curl->get($url);

        if($curl->error)
        {
            echo 'Error: ' . $curl->errorCode . ': ' . $curl->errorMessage;
        }
        else
        {
            $result = $curl->response;
            $result = iconv('gb2312', 'utf-8//IGNORE', $result);
            echo $result;
        }

        echo '<pre>';
        var_dump($curl->requestHeaders);
        var_dump($curl->responseHeaders);
        $curl->close();

        return false;
    }
}