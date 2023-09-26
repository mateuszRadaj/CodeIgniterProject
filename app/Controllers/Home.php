<?php

namespace App\Controllers;

use App\Models\NoteModel;

class Home extends BaseController
{
    public function index()
    {
        $noteModel = new NoteModel();
        $data['notes'] = $noteModel->findAll();

        return view('pages/home', $data);

    }
}