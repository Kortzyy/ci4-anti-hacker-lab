<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class FormController extends Controller
{
    public function index()
    {
        return view('form_view');
    }

   public function submit()
{
    $input = $this->request->getPost('name');

    return view('result_view', [
        'user_input' => $input
    ]);
}
}