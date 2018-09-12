@include('layouts.head')

@include('layouts.nav')

<main class="container pt-3">

    <section class="new-releases pt-5">

        <h2 class="new-releases-title">New Releases</h2>

        <div class="book-display">

            @foreach ($books as $book)

                @include('partials.book')

            @endforeach

        </div>

    </section>

</main>


@include('layouts.footer')

