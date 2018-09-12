@include('layouts.head')

@include('layouts.nav')

<main class="container pt-3">

    <section class="new-releases pt-5">

        <h2 class="new-releases-title">New Releases</h2>

        <div class="book-display pt-3">

            @foreach ($books as $book)

                @include('book.partials.card')

            @endforeach

        </div>

    </section>

</main>

@include('layouts.footer')

