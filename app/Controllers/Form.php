<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Models\NoteModel;
use CodeIgniter\HTTP\IncomingRequest;
  
class Form extends BaseController 
{ 
    protected $helpers = ['form'];

    public function index()
    {
        if (! $this->request->is('post')) {
            return view('pages/note_form');
        }

        $rules = [
            'note_title' => 'required|max_length[50]',
            'note_content' => 'required',
        ];

        if (! $this->validate($rules)) {
            return view('pages/note_form');
        }

        $validData = $this->validator->getValidated();
        
        $db = \Config\Database::connect();
        $builder = $db->table('notes');

        $builder->insert($validData);

        $data['message'] = 'THE NOTE HAS BEEN SUCCESSFULLY SAVED!';

        return view('pages/success', $data);
    }
}