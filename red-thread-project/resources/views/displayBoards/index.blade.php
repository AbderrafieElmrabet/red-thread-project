@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">School Display Board</h1>

    @foreach ($displayBoards as $board)
    <div class="card mb-4">
        <div class="card-header">
            <h2>{{ $board->title }}</h2>
        </div>
        <div class="card-body">
            @if ($board->image)
            <img src="{{ asset('storage/' . $board->image) }}" alt="Display Board Image" class="img-fluid mb-3">
            @endif
            <p>{{ $board->description }}</p>
            <small class="text-muted">Posted on {{ $board->created_at->format('F d, Y') }}</small>
        </div>
    </div>
    @endforeach

</div>
@endsection
