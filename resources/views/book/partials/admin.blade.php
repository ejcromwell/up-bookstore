 <div class="book">
    <div class="book-img">
        <img class="img-fluid" src="{{ $book->cover }}" alt="">
    </div>
    <div class="book-content">
        <div class="book-name">
            {{ $book->name }}
        </div>
        <div class="book-price">
            {{ $book->price }}
        </div>
        <div class="book-delete">
            <a class="btn btn-danger" href="/admin/{{ $book->id }}/delete/">DELETE</a>
        </div>
    </div>
 </div>
