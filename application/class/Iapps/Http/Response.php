<?php
namespace Iapps\Http;

use Iapps\Common\Helper;

class Response
{
    public $httpStatusCode;

    public $output;

    public $message;

    /**
     * [__construct description]
     *
     * @param [type] $status_code [description]
     * @param [type] $response    [description]
     * @param string $message     [description]
     */
    public function __construct($status_code, $response, $message = '')
    {
        $this->httpStatusCode = $status_code;
        $this->output         = new Output($response);
        $this->message        = $message;
    }

    public function getHeaderCode()
    {
        return $this->httpStatusCode;
    }

    /**
     * Gets the value of output.
     *
     * @return mixed
     */
    public function getOutput()
    {
        return $this->output;
    }

    /**
     * Gets the value of message.
     *
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    public function isOK()
    {
        return $this->httpStatusCode == '200';
    }

    public function isInvalidToken()
    {
        return $this->httpStatusCode == '403';
    }

    public function logMessage()
    {

    }
}
