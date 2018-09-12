 <div class="book">
    <div class="book-img">
        <img class="img-fluid" src="{{ $book->cover }}" alt="">
    </div>
    <div class="book-content">
        <div class="book-name">
            {{ $book->name }}
        </div>
        <div class="book-price">
            <?= ($book->price) ? '£' . $book->price: ''; ?>
        </div>
        <div class="book-delete pt-2">

            <form method="POST" action="{{ route('admin.destroy', $book->id) }}">
                {{ csrf_field() }}
                <input name="_method" type="hidden" value="DELETE">
                <input type="submit" class="btn btn-danger" id="delete" value="DELETE"/>
            </form>

        </div>
    </div>
 </div>
