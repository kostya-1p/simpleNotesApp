<?php

namespace App\Models;

use App\Model;

class FetchNotesModel extends Model
{
    public function selectData(): bool|array
    {
        $query = "SELECT * FROM notes";
        $stmt = $this->db->query($query);
        $notesFromDB = $stmt->fetchAll();
        $notes = [];
        foreach ($notesFromDB as $noteDB){
            $note = new Note($noteDB['title'], $noteDB['description'], $noteDB['create_date'], $noteDB['id']);
            $notes[] = $note;
        }

        return $notes;
    }
}