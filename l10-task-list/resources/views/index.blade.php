@extends('layouts.app')

@section('title', 'The list of tasks')

@section('content')
    <div>
        @forelse($tasks as $task)
            <div>
                <a href="{{ route('task.show', ['id' => $task->id]) }}">{{ $task->title }}</a>
            </div>
        @empty
            <div>
                There are not tasks!
            </div>
        @endforelse
    </div>
@endsection
