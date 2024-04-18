<div class="card my-3 p-3 rounded">
    <a href="{{ url('/book/' . $book->id) }}">
        <img class="card-img-top" src="{{ asset($book->coverImageUrl) }}" alt="{{ $book->title }}">
    </a>
    <div class="card-body">
        <a href="{{ url('/book/' . $book->id) }}">
            <h5 class="card-title"><strong>{{ $book->title }}</strong></h5>
        </a>
        <h3>${{ number_format($book->price, 2) }}</h3>
    </div>
</div>
