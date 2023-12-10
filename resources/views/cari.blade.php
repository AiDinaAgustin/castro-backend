@extends('layouts.layout')

@section('content')
    <header class="sticky top-0 bg-zinc-900 z-50 flex items-center justify-between mb-4 py-2">
        <div class="button-nav flex items-center">
        <div class="btn-undo mr-4">
            <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512" fill="#F9D80F"><path d="M512 256A256 256 0 1 0 0 256a256 256 0 1 0 512 0zM271 135c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-87 87 87 87c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L167 273c-9.4-9.4-9.4-24.6 0-33.9L271 135z"/></svg>
        </div>
        <div class="btn-redo mr-4">
            <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512" fill="#F9D80F"><path d="M0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM241 377c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l87-87-87-87c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0L345 239c9.4 9.4 9.4 24.6 0 33.9L241 377z"/></svg>
        </div>
        <div class="relative search-btn w-72 h-8 bg-black rounded-full overflow-hidden px-4">
            <div class="absolute translate-y-2/4 top-0 left-2">
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512" fill="white"><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
            </div>
            <input class="w-full h-full ml-5 text-white bg-transparent outline-none" type="search" placeholder="What do you want to listen?">
        </div>
        </div>
    </header>
    <main class="w-full min-h-screen overflow-x-hidden">
          <!-- Main content -->
          <!-- Browse All -->
          <div class="mb-4">
            <h3 class="text-2xl text-white font-bold mb-3">Browse All</h3>
            <div class="flex flex-wrap gap-4 text-xl text-white font-bold">

              <a href="/?category={{ $podcast->category->slug }}">
                <div class="relative overflow-hidden bg-pink-600 w-40 h-40 rounded-lg p-2">
                    <p class="text-white">Supra natural</p>
                    <img class="absolute -rotate-45 -bottom-5 right-0" src="assets/img/page1.jpg" alt="your music" width="80px">
                  </div>
              </a>
        
              <div class="relative overflow-hidden bg-blue-600 w-40 h-40 rounded-lg p-2">
                <p class="text-white">Thriler</p>
                <img class="absolute -rotate-45 -bottom-5 right-0" src="assets/img/page2.jpg" alt="your podcast" width="80px">
              </div>
          
              <div class="relative overflow-hidden bg-green-600 w-40 h-40 rounded-lg p-2">
                <p class="text-white">Cerita hantu</p>
                <img class="absolute -rotate-45 -bottom-5 right-0" src="assets/img/page3.jpg" alt="your audiobook" width="80px">
              </div>
          
              <div class="relative overflow-hidden bg-yellow-600 w-40 h-40 rounded-lg p-2">
                <p class="text-white">Mistis</p>
                <img class="absolute -rotate-45 -bottom-5 right-0" src="assets/img/page4.jpg" alt="your music" width="80px">
              </div>
          
              <div class="relative overflow-hidden bg-purple-600 w-40 h-40 rounded-lg p-2">
                <p class="text-white">Nadia omara</p>
                <img class="absolute -rotate-45 -bottom-5 right-0" src="assets/img/page4.jpg" alt="your podcast" width="80px">
              </div>

            </div>
          </div>
        </main>
@endsection