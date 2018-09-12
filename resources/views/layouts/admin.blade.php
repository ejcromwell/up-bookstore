@include('layouts.head')

@include('layouts.nav')

<main class="container pt-3">

    <section class="book-inventory pt-5">

        <h2 class="book-inventory-title">Mange Book Inventory</h2>

        <div class="book-table pt-5">

            @foreach ($books as $book)

                @include('partials.book-row')

            @endforeach

        </div>

    </section>

</main>


@include('layouts.footer')

