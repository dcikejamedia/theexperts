<?php

namespace App\Exceptions;

use Exception;
use App\Traits\Respondable;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ApplicationException extends Exception
{
    use Respondable;

    /**
     * Render the exception into an HTTP response.
     *
     * @param  Request  $request
     * @return JsonResponse
     */
    public function render(Request $request): JsonResponse
    {
        $code = $this->getCode();
        $message = $this->getMessage();
        return $this->error(null, $message, $code);
    }
}
