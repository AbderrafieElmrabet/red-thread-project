<?php

namespace App\Services;

use App\Models\DisplayBoard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DisplayBoardServices
{
    public function getData()
    {
        return DisplayBoard::latest()->get();
    }
}