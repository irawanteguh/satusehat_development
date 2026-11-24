<?php

namespace Modules\LandingPage\Controllers;

use App\Controllers\BaseController;

class LandingPage extends BaseController
{
    public function index(): string
    {
        return view('Modules\LandingPage\Views\index', [
            'title' => 'SATUSEHAT Development',
        ]);
    }
}
