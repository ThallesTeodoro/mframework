<?php

namespace App\Http\Controllers;

use App\Models\User;

class HomeController
{
    public function index()
    {
        $user = new User;
        echo $user->save(['Mariana', 'marianafigueiredo@teste.com', 'secret']);
        view('home.index', ['data' => ['teste 1', 'teste 2', 'teste 3']]);
    }
}
