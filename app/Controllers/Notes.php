<?php

namespace App\Controllers;

use App\Models\NoteModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Notes extends BaseController
{
    public function delete_note()
    {
        if ( $this->request->is('post')){
            $db = \Config\Database::connect();
            $builder = $db->table('notes');
            $id = (int) $this->request->getVar('note_id');
            $builder->where('note_id', $id);
            $builder->delete();
            return redirect('/',200);
        }   

    }

    public function show_note($note_id = null)
    {
        $model = model(NoteModel::class);

        $data['notes'] = $model->getNotes($note_id);

        if (empty($data['notes'])) {
            throw new PageNotFoundException('Cannot find the news item: ' . $slug);
        }

        return view('pages/note', $data);
    }

    public function edit_note($note_id = null)
    {
        
    }
}