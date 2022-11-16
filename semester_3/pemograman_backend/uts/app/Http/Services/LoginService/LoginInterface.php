<?php

namespace App\Http\Services\LoginService;

interface LoginInterface {
    public function login($data) : array;
}
