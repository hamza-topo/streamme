<?php

namespace App\Exceptions;

use Exception;

abstract class ApiException extends Exception
{
    abstract function report();

    public function render($request)
    {
        $response['code'] = $this->getCode();
        $response['status'] = "Error";
        $response['message'] = $this->getMessage();
        $response['data'] = $this->getTrace();
        return response()->json($response);
    }
}
