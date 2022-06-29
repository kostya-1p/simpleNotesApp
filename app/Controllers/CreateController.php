<?php

namespace App\Controllers;

use App\Models\CreateNoteModel;

class CreateController
{
    public function create()
    {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $createModel = new CreateNoteModel();
        $createModel->saveNote($title, $description);
        header("Location: /");
    }
}