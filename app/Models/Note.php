<?php

namespace App\Models;


class Note
{
    public function __construct(public string $title, public string $description, public string $createDate)
    {
    }
}