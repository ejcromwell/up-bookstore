 <div class="book-row">
    <div class="book-row-id">
      {{ $book->id }}
    </div>
    <div class="book-row-name">
      {{ $book->name }}
    </div>
    <div class="book-row-edit">
      <a class="btn btn-info" href="/admin/{{ $book->id }}">EDIT</a>
    </div>
    <div class="book-row-delete">
    </div>
  </div>
 </div>

