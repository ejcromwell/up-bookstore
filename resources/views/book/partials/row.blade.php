 <div class="book-row">
    <div class="book-row-id">
      {{ $book->id }}
    </div>
    <div class="book-row-name">
      {{ $book->name }}
    </div>
    <div class="book-row-edit pt-2">
      <a class="btn btn-info" href="/admin/{{ $book->id }}">EDIT</a>
    </div>
  </div>
 </div>

