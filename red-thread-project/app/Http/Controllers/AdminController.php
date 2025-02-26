<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Services\DisplayBoardServices;

class AdminController extends Controller
{
    protected $displayBoardServices;

    public function __construct(DisplayBoardServices $displayBoardServices)
    {
        $this->displayBoardServices = $displayBoardServices;
    }
    public function index()
    {
        if (!Auth::check() || Auth::user()->role !== 'admin') {
            abort(403, 'Unauthorized access.');
        }

        $displayBoards = $this->displayBoardServices->getData();
        return view('admin.dashboard', compact('displayBoards'));
    }
}
