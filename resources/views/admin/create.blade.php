@include('layouts.head')

@include('layouts.nav')

<main class="container pt-3">

    <section class="pt-5">

        <h2 >Add A New Book</h2>

        <div class=" pt-5">

          @include('book.partials.form')

        </div>

    </section>

</main>


@include('layouts.footer')

