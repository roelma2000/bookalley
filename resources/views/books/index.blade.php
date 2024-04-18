<!-- resources/views/books/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    @if (isset($error))
        <div class="alert alert-danger">{{ $error }}</div>
    @else
        <h2>Latest Books</h2>
        <div class="row">
            @forelse ($books as $book)
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                     <x-book :book="$book" />
                </div>
            @empty
                <div class="col">
                    <p>No books available.</p>
                </div>
            @endforelse
        </div>

        <div class="d-flex justify-content-center">
            {{ $books->onEachSide(1)->links() }}
        </div>


    @endif
</div>
@endsection
