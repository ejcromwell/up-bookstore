@include('layouts.head')

@include('layouts.nav')

<main class="container pt-3">

    <section class="pt-5">

        <h2 >Edit Book Details</h2>

        <div class="single-book pt-5">

            @include('partials.book-edit')

        </div>

    </section>

</main>


@include('layouts.footer')

