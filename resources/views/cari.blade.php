@extends('layouts.layout')

@section('content')
    <main class="w-full min-h-screen overflow-x-hidden">
          <!-- Main content -->
          <!-- Browse All -->
          <div class="mb-4">
            <h3 class="text-2xl text-white font-bold mb-3">Browse All</h3>
            <div class="flex flex-wrap gap-4 text-xl text-white font-bold">

              <div class="relative overflow-hidden bg-pink-600 w-40 h-40 rounded-lg p-2">
                <p class="text-white">Supra natural</p>
                <img class="absolute -rotate-45 -bottom-5 right-0" src="assets/img/page1.jpg" alt="your music" width="80px">
              </div>
        
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