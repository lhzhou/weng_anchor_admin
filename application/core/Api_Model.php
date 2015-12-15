<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

use Guzzle\Http\Client;

class Api_Model extends CI_Model
{
    const GUZZLE_TIMEOUT = 30;

    public function __construct()
    {
        parent::__construct();
    }

    protected function post($url = '', $params = array(), $headers = array(), $output = 'json')
    {
        $user_token = $this->session->userdata('token');
        if (!empty($user_token)){
            $headers['X_AUTHORIZATION'] = $user_token;
        }

        // var_dump($url , $params , $headers);exit();
        $client = new Client();
        $client->setUserAgent($this->input->user_agent());
        $params['source_ip'] = $this->input->ip_address();
        $request = $client->post($url, $headers, $params, array('timeout' => self::GUZZLE_TIMEOUT));

        try {
            $response = $request->send();
            return GuzzleWrapper::response($response);
        } catch (Guzzle\Http\Exception\BadResponseException $e) { // superclass of ClientErrorResponseException (4xx), ServerErrorResponseException (5xx) and TooManyRedirectsException
            $response = $e->getResponse();
            return GuzzleWrapper::response($response);
        } catch (Guzzle\Http\Exception\CurlException $e) {
            return GuzzleWrapper::exception($e);
        } catch (\Exception $e) {
            return GuzzleWrapper::exception($e);
        }

        return $request;
    }

    protected function get($url = '', $params = array(), $headers = array(), $output = 'json')
    {

        $user_token = $this->session->userdata('token');
        if (!empty($user_token)){
            $headers['X_AUTHORIZATION'] = $user_token;
        }

        $client = new Client();
        $client->setUserAgent($this->input->user_agent());
        $params['source_ip'] = $this->input->ip_address();
        $request = $client->get($url, $headers, array('query' => $params, 'timeout' => self::GUZZLE_TIMEOUT));

        try {
            $response = $request->send();
            return GuzzleWrapper::response($response);
        } catch (Guzzle\Http\Exception\BadResponseException $e) { // superclass of ClientErrorResponseException (4xx), ServerErrorResponseException (5xx) and TooManyRedirectsException
            $response = $e->getResponse();
            return GuzzleWrapper::response($response);
        } catch (Guzzle\Http\Exception\CurlException $e) {
            return GuzzleWrapper::exception($e);
        } catch (\Exception $e) {
            return GuzzleWrapper::exception($e);
        }

        return $request;
    }

}