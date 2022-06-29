<?php

namespace App\Models;

use App\Model;

class CreateNoteModel extends Model
{
    public function saveNote(string $title, string $description)
    {
        $currentDate = date('Y-m-d H:i:s');
        $note = new Note($title, $description, $currentDate);
        $this->insertNote($note);
    }

    private function insertNote(Note $note)
    {
        $query = "INSERT INTO notes (title, description, create_date)
                  VALUES (:title, :description, :create_date);";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$note->title, $note->description, $note->createDate]);
    }
}