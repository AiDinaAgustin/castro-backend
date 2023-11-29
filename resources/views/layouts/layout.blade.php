<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  <style>
    main::-webkit-scrollbar {
      width: 12px;
    }
  
    main::-webkit-scrollbar-track {
      background: none;
    }
  
    main::-webkit-scrollbar-thumb {
      background-color: rgba(203, 213, 225, 0.5);
      border: none;
    }
    .play-btn {
      position: absolute;
      bottom: 0;
      right: 10px;
      width: 2rem;
      height: 2rem;
      border-radius: 9999px;
      background-color: rgb(250 204 21);
      display: flex;
      align-items: center;
      justify-content: center;
      opacity: 0;
      transition: opacity ease-out 0.2s;
    }
    .cover-music:hover .play-btn {
      opacity: 1;
      bottom: 10px;
    }
    .show {
      display: block !important;
      width: 100%;
      height: 100%;
      background-color: black;
      z-index: 40;
      transition: width 0.4s ease-in;
    }

    .cover {
      background-image: url(assets/img/horor2.jpg);
      background-repeat: no-repeat;
      background-size: cover;
      width: 100%;
      height: 500px;
      filter: blur(10px);
    }
  </style>  
  <title>Castro Studio</title>
</head>
<body class="bg-black">
  <div class="relative my-5 mx-3">
    <div class="show-btn absolute z-50 w-8 h-8 rounded-full flex justify-center items-center bg-amber-400 left-0 inset-y-0 sm:hidden my-auto">
      <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 512 512"><path d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256 265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256 73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z"/></svg>
    </div>
    <div class="flex items-start gap-4">
      @include('partials.navbar')
      <div class="flex-1 bg-zinc-900 rounded-lg mx-auto py-2 px-4">
        
        {{-- Main content --}}
        @yield('content')
      </div>
    </div>
  </div>
</body>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- swiper card -->
<script>
  const swiper = new Swiper('.swiper', {
    // Default parameter
    slidesPerView: 1,
    breakpoints: {
      // when window width is >= 320px
      450: {
        slidesPerView: 2,
        spaceBetween: 20
      },
      720: {
        slidesPerView: 3,
        spaceBetween: 40
      },
      900: {
        slidesPerView: 4,
        spaceBetween: 40
      },
      1200: {
        slidesPerView: 5,
        spaceBetween: 40
      },
      1500: {
        slidesPerView: 7,
        spaceBetween: 40
      }
    },
    spaceBetween: 30,
    loop: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
</script>
<script>
  // button share 
  const btnShare = document.querySelector('.btn-share')
  btnShare.addEventListener('click', () => {
    const currentURL = window.location.href;
    const dummy = document.createElement('textarea');
    dummy.value = currentURL;
    document.body.appendChild(dummy);
    dummy.select();
    document.execCommand('copy');
    document.body.removeChild(dummy);

    // Tampilkan alert
    alert('URL berhasil disalin!');
  })
</script>
<script>
  // show modal menu 
  const showButton = document.querySelector('.show-btn');
  const modalMenu = document.querySelector('nav');
  showButton.addEventListener(('click'), ()=> {
    modalMenu.classList.toggle('show');
  })
</script>
<script>
  const playbtns = document.querySelectorAll('.play_btn')
  const pausebtns = document.querySelectorAll('.pause_btn')
  pausebtns.forEach((pausebtn) => {
    pausebtn.style.display = 'none'
  })

  playbtns.forEach((playbtn) => {
    playbtn.addEventListener('click', () => {
      pausebtns.forEach((pausebtn) => {
        pausebtn.style.display = 'block'
      })
      playbtns.forEach((playbtn) => {
        playbtn.style.display = 'none'
      })
    })
  })

  pausebtns.forEach((pausebtn, index) => {
    pausebtn.addEventListener('click', () => {
      playbtns.forEach((playbtn) => {
        playbtn.style.display = 'block'
      })
      pausebtns.forEach((pausebtn) => {
        pausebtn.style.display = 'none'
      })
    })
  })
</script>

</html>