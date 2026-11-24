<?php

namespace Modules\Auth\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function index(): string
    {
        return view('Modules\Auth\Views\index', [
            'title' => 'Autentikasi | SATUSEHAT Development',
        ]);
    }
}
