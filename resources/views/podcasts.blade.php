@extends('layouts.main')

@section('content')
<main class="w-full min-h-screen overflow-x-hidden">
    <!-- Main content -->
    <!-- Pamflet Podcast -->
    <div class="mb-4">
      <!-- Slider main container -->
      <div class="mySwiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
            <img class="w-full" src="assets/img/banner-1699624477532.jpg" alt="">
          </div>
          <div class="swiper-slide">
            <img class="w-full" src="assets/img/banner-1699624477532.jpg" alt="">
          </div>
          <div class="swiper-slide">
            <img class="w-full" src="assets/img/banner-1699624477532.jpg" alt="">
          </div>
          <div class="swiper-slide">
            <img class="w-full" src="assets/img/banner-1699624477532.jpg" alt="">
          </div>
        </div>
        <!-- If we need pagination -->
        <!-- <div class="swiper-pagination"></div> -->
      </div>
    </div>
    <div class="mb-4">
      <h3 class="text-2xl text-white font-bold mb-3" id="timeDisplay">Loading ...</h3>
      <div class="flex flex-wrap gap-4 text-xl text-white font-bold">
        <div class="relative overflow-hidden bg-pink-600 w-64 h-24 rounded-lg p-2">
          <p>Dibuat untuk kamu</p>
          <img class="absolute -rotate-45 -bottom-5 right-0" src="assets/img/page1.jpg" alt="your music" width="80px">
        </div>
        <div class="relative overflow-hidden bg-teal-700 w-64 h-24 rounded-lg p-2">
          <p>Rilis baru</p>
          <img class="absolute -rotate-45 -bottom-5 right-0" src="assets/img/page2.jpg" alt="your music" width="80px">
        </div>
        <div class="relative overflow-hidden bg-indigo-800 w-64 h-24 rounded-lg p-2">
          <p>Teman tidur</p>
          <img class="absolute -rotate-45 -bottom-5 right-0" src="assets/img/page3.jpg" alt="your music" width="80px">
        </div>
        <div class="relative overflow-hidden bg-purple-700 w-64 h-24 rounded-lg p-2">
          <p>Acara Langsung</p>
          <img class="absolute -rotate-45 -bottom-5 right-0" src="assets/img/page4.jpg" alt="your music" width="80px">
        </div>
      </div>
    </div>
    <!-- Acaramu -->
    <div class="mb-4">
        <h3 class="text-2xl text-white font-bold mb-3">Acaramu</h3>
        <!-- Slider main container -->
          <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              @foreach ($podcasts as $podcast)
              <div class="swiper-slide">
                <a href="/{{ $podcast->slug }}">
                  <div class="cover-music bg-zinc-800 w-40 h-56 rounded-md p-2">
                    <div class="relative w-36">
                      <img class="w-full" src="assets/img/page1.jpg" alt="your music">
                      <div class="play-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z"/></svg>
                      </div>
                    </div>
                    <div>
                      <h4 class="truncate text-white text-base mb-2">{{ $podcast["title"] }}</h4>
                      <h6 class="truncate text-slate-400 text-xs">{!! $podcast->excerpt !!}</h6>
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
       
      </div>
  
   
    <!-- Episode Baru Podcast -->
    <div class="mb-4">
      <h3 class="text-2xl text-white font-bold mb-3">Podcast Terbaru</h3>
      <!-- Slider main container -->
      <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          {{-- Bikin foreach disini --}}
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
    </div>
    <!-- Top Podcast Horor -->
    <div class="mb-4">
      <h3 class="text-2xl text-white font-bold mb-3">Top Podcast Horor</h3>
      <!-- Slider main container -->
      <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          {{-- Bikin foreach disini --}}
          <div class="swiper-slide">
            <a href="details.html">
              <div class="cover-music bg-zinc-800 w-40 h-56 rounded-md p-2">
                <div class="relative w-36">
                  <img class="w-full" src="assets/img/image-dummy.png" alt="your music">
                  <div class="play-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z"/></svg>
                  </div>
                </div>
                <div>
                  <h4 class="truncate text-white text-base mb-2">Lorem, ipsum dolor.</h4>
                  <p class="truncate text-slate-400 text-xs">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
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
    <!-- Episode -->
    <div class="mb-4">
      <h3 class="text-2xl text-white font-bold mb-3">Episode</h3>
      <!-- Slider main container -->
      <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          {{-- Bikin foreach disini --}}
          <div class="swiper-slide">
            <a href="details.html">
              <div class="cover-music bg-zinc-800 w-40 h-56 rounded-md p-2">
                <div class="relative w-36">
                  <img class="w-full" src="assets/img/image-dummy.png" alt="your music">
                  <div class="play-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z"/></svg>
                  </div>
                </div>
                <div>
                  <h4 class="truncate text-white text-base mb-2">Lorem, ipsum dolor.</h4>
                  <p class="truncate text-slate-400 text-xs">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
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
    <!-- Langganan -->
    <div class="w-full mb-4">
      <div class="w-full bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold mb-4">Berlangganan Untuk Konten Premium!</h2>
        <p class="text-gray-600 mb-6">Dapatkan akses ke konten eksklusif dan manfaat lainnya dengan berlangganan sekarang.</p>
        
        <!-- Form Berlangganan -->
        <form action="#" method="POST">
          <div class="mb-4">
            <label for="email" class="block text-gray-600 text-sm font-medium mb-2">Alamat Email</label>
            <input type="email" id="email" name="email" class="w-full border rounded-md py-2 px-3 text-gray-700">
          </div>
          
          <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">Berlangganan Sekarang</button>
        </form>
      </div>
    </div>
  </main>
@endsection