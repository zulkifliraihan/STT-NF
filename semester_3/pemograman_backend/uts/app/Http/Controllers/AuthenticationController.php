<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Services\LoginService\LoginInterface;
use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    protected $loginInterface;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(LoginInterface $loginInterface)
    {
        $this->loginInterface = $loginInterface;
        $this->middleware('guest')->except('logout');
    }

    public function login(LoginRequest $loginRequest)
    {
        try {
            // Start : Collecting All Request
            $data = $loginRequest->all();
            // End : Collecting All Request

            $loginInterface = $this->loginInterface->login($data);

            if ($loginInterface['statusInterface'] == "failed") {
                return $this->errorvalidator($loginInterface['messageInterface']);
            }
            else {
                return $this->successData(
                    $loginInterface['dataInterface']->response,
                    $loginInterface['dataInterface']->data,
                    $loginInterface['dataInterface']->message,
                );
            }
        }
        catch (\Throwable $th) {
            return $this->errorCode($th->getMessage());
        }
    }
}
