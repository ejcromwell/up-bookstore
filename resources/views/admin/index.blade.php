@include('layouts.head')

@include('layouts.nav')

<main class="container pt-3">

    <section class="book-inventory pt-5">

        <h2 class="book-inventory-title">Mange Book Inventory</h2>

        <div class="pt-3 pb-3">
          <a class="btn btn-secondary" href="{{ action('AdminController@create')}}">Add New Book To Inventroy</a>
        </div>

        <div class="book-table pt-5">
            <h3 class="pb-3">Current Invnetory</h3>

            @foreach ($books as $book)

                @include('book.partials.row')

            @endforeach

        </div>

    </section>

</main>

@include('layouts.footer')

