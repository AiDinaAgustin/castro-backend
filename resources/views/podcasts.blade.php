@extends('layouts.main')

@section('content')
<main class="w-full min-h-screen overflow-x-hidden">
    <!-- Main content -->
    <!-- Acaramu -->
    @foreach ($podcasts as $podcast)
    <div class="mb-4">
        <h3 class="text-2xl text-white font-bold mb-3">Acaramu</h3>
        <!-- Slider main container -->
        <div class="swiper">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
              <a href="{{ $podcast["id"] }}">
                <div class="cover-music bg-zinc-800 w-40 h-56 rounded-md p-2">
                  <div class="relative w-36">
                    <img class="w-full" src="assets/img/page1.jpg" alt="your music">
                    <div class="play-btn">
                      <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z"/></svg>
                    </div>
                  </div>
                  <div>
                    <h4 class="truncate text-white text-base mb-2">{{ $podcast["title"] }}</h4>
                    <p class="truncate text-slate-400 text-xs">{{ $podcast["body"] }}</p>
                  </div>
                </div>
              </a>
            </div>
            
          </div>
          <!-- If we need navigation buttons -->
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </div>
    @endforeach
  </main>
@endsection