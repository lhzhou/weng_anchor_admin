<?php
namespace Iapps\Http;

use Iapps\Common\Helper;
use Iapps\Common\Folder;

class Output implements \JsonSerializable
{
    public $output;

    public $statusCode;

    public $results;

    public $total;

    public $message;

    public $folder;

    public $accessToken;

    public function __construct($output)
    {
        $this->output     = $output;
        $this->statusCode = Helper::getFromArray($output, 'status_code', 500);
        $this->results    = Helper::getFromArray($output, 'results', array());
        $this->total      = Helper::getFromArray($output, 'total', 1);
        $this->message    = Helper::getFromArray($output, 'message', 'Unknown response from server. Please try again later.');
        $this->folder     = new Folder(Helper::getFromArray($output, 'folder', array()));

        // $this->accessToken = Helper::getFromArray($output, 'access_token', '0X0');
    }

    public function jsonSerialize()
    {
        $data['status_code'] = $this->statusCode;
        $data['results'] = $this->results;
        $data['total'] = $this->total;
        $data['message'] = $this->message;

        return $data;
    }

    /**
     * Gets the value of status_code.
     *
     * @return mixed
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * Gets the value of results.
     *
     * @return mixed
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * Gets the value of total.
     *
     * @return mixed
     */
    public function getTotal()
    {
        return $this->total;
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

    /**
     * Gets the value of folder.
     *
     * @return mixed
     */
    public function getFolder()
    {
        return $this->folder;
    }
}
