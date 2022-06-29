<?php

namespace App\Models;

class DeleteNoteModel extends \App\Model
{
    public function deleteNote(int $id)
    {
        $query = "DELETE FROM notes WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$id]);
    }
}