<?php

namespace App\Http\Controllers;

use App\Models\DisplayBoard;
use Illuminate\Http\Request;
use App\Services\DisplayBoardServices;

class DisplayBoardController extends Controller
{
    protected $displayBoardServices;
    public function __construct(DisplayBoardServices $displayBoardServices)
    {
        $this->displayBoardServices = $displayBoardServices;
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $displayBoards = $this->displayBoardServices->getData();
        return view('displayBoards.index', compact('displayBoards'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DisplayBoard $displayBoard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DisplayBoard $displayBoard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DisplayBoard $displayBoard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DisplayBoard $displayBoard)
    {
        //
    }
}