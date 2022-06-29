<?php

namespace App\Controllers;

use App\Models\DeleteNoteModel;

class DeleteNoteController
{
    public function delete()
    {
        $deleteModel = new DeleteNoteModel();
        $id = $_POST['id'];
        $deleteModel->deleteNote($id);
        header("Location: /");
    }
}