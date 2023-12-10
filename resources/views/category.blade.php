
@extends('layouts.main')

@section('content')

    <h1 class="mb-5">Post Category : {{ $category }}</h1>
    
    {{-- <div class="swiper">
        <div class="swiper-wrapper">
          @foreach ($podcasts as $podcast)
          <div class="swiper-slide">
            <a href="/{{ $podcast->slug }}">
              <div class="cover-music bg-zinc-800 w-40 h-56 rounded-md p-2">
                <div class="relative w-36">
                  <img class="w-full" src="https://source.unsplash.com/500x500?{{ $podcast->category->name }}" alt="your music">
                  <div class="play-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z"/></svg>
                  </div>
                </div>
                <div>
                  <h4 class="truncate text-white text-base mb-2">{{ $podcast->title }}</h4>
                  <p class="truncate text-slate-400 text-xs">{{ $podcast->excerpt }}</p>
                </div>
              </div>
            </a>
          </div>
          @endforeach
          
        </div>
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
    </div> --}}

@endsection

