<?php

class GuzzleWrapper
{
    public static function response($response)
    {
        try {
            if (strpos($response->getContentType(),'application/json') !== false) {
                return new Iapps\Http\Response($response->getStatusCode(), $response->json());
            } else {
                error_log($response->getBody(true));
                return new Iapps\Http\Response(500, array(), $response->getBody(true));
            }
        } catch (\Exception $e) {
            return new Iapps\Http\Response($response->getStatusCode(), array(), $response->getBody(true));
        }
    }

    public static function exception($e)
    {
        error_log($e->getMessage());
        return new Iapps\Http\Response($e->getCode(), array(), $e->getMessage());
    }
}
