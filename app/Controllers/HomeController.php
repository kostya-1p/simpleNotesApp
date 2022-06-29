<?php

namespace App\Controllers;

use App\Models\FetchNotesModel;
use App\View;

class HomeController
{
    public function index(): View
    {
        $fetchModel = new FetchNotesModel();
        $notes = $fetchModel->selectData();
        return View::make('index', ['notes'=>$notes]);
    }
}