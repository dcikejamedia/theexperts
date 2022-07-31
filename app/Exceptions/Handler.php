<?php

namespace App\Exceptions;

use Throwable;
use App\Traits\Respondable;
use Illuminate\Http\Response;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Validation\ValidationException;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

/**
 * Class Handler
 * @package App\Exceptions
 */
class Handler extends ExceptionHandler
{
    use Respondable;
    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        ApplicationException::class,
    ];

    /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register(): void
    {
        $this->renderable(function (ValidationException $e) {
            $errors = $e->validator->errors()->getMessages();
            return $this->error(
                $errors,
                'The given data is invalid',
                Response::HTTP_UNPROCESSABLE_ENTITY
            );
        });
        $this->renderable(function (ModelNotFoundException $e) {
            $model = ucwords(strtolower(class_basename($e->getModel())));
            return $this->error(
                null,
                "Does not exist any instance of {$model} with the given id",
                Response::HTTP_NOT_FOUND
            );
        });

        $this->renderable(function (AuthorizationException $e) {
            return $this->error(null, $e->getMessage(), Response::HTTP_FORBIDDEN);
        });

        $this->renderable(function (AuthenticationException $e) {
            return $this->error(null, $e->getMessage(), Response::HTTP_UNAUTHORIZED);
        });

        $this->renderable(function (AccessDeniedHttpException $e) {
            return $this->error(null, $e->getMessage(), Response::HTTP_UNAUTHORIZED);
        });
        $this->renderable(function (NotFoundHttpException $e) {
            return $this->error(null, trans('general.not_found'), Response::HTTP_NOT_FOUND);
        });
        // Default Error handler, a fallback
        $this->renderable(function (Throwable $e) {
            return $this->fatalError($e);
        });
    }
}
