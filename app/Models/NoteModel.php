<?php

namespace App\Models;

use CodeIgniter\Model;

class NoteModel extends Model
{
    protected $table = 'notes';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType = 'array';

    protected $allowedFields = ['note_title', 'note_content', 'note_created_at'];


    public function getNotes($note_id = false)
    {
        if($note_id === false) {
            return $this->findAll();
        }

        return $this->where(['note_id' => $note_id])->first();
    }

}				