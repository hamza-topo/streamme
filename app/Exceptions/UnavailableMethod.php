<?php 
namespace App\Exceptions;

use Illuminate\Support\Facades\Log;

class UnavailableMethod extends ApiException
{

    /**
     * Report or log an exception.
     *
     * @return void
     */
    public function report()
    {
        Log::debug('Unavailable Method Api :' .$this->getTraceAsString());
    }

   

}