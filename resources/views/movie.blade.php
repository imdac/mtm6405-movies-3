<x-layout>
  <x-slot name="title">{{ $movie_title }}</x-slot>

  <section class="movie-details">
    <h2 class="movie-title">
      {{ $movie_title }} <span class="movie-year">({{ $year }})</span></h2>    
    <p>Director<br>
    <strong>{{ $director }}</strong></p>
  </section>

</x-layout>