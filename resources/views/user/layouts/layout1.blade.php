<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Spotify Redesign</title>
  <link rel="shortcut icon" type="image/png" href="https://i.imgur.com/HYlxHuo.png"/>
<link rel="stylesheet" href="https://raw.githubusercontent.com/ilyasbilgihan/small-projects/main/UI%20Designs/Spotify%20Redesign/assets/fonts/LuxoraGrotesk/fontface.css"><link rel="stylesheet" href="/frontend/style.css">

<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
  * {
    font-family: 'Poppins', sans-serif;
  }


  
</style>

  @yield('extras')



</head>
<body>
<!-- partial:index.partial.html -->
<body class="flex h-screen overflow-hidden">
  @include('user.layouts.sidebar')
  <main class="h-screen flex-1 flex flex-col bg-black bg-opacity-50 backdrop-blur-lg ">
    @yield('content')
  </main>
  <aside class="hidden md:flex flex-col items-center space-y-[1.75rem] border-l border-border w-[5rem] flex-shrink-0 h-full py-[1.25rem] bg-black backdrop-blur-xl bg-opacity-50">
    <a href="#" class="duration-300 hover:opacity-70 flex flex-col items-center">
      <div class="icon w-[1.75rem] h-[1.75rem]">
        <svg viewBox="0 0 24 24" fill="#fff" xmlns="http://www.w3.org/2000/svg">
          <path d="M16.7702 18.98H7.23024C6.81024 18.98 6.43024 18.71 6.29024 18.32L2.13024 6.67004C1.80024 5.74004 2.86024 4.95004 3.65024 5.52004L7.65024 8.38004C8.18024 8.76004 8.94024 8.53004 9.17024 7.92004L11.0602 2.88004C11.3802 2.01004 12.6102 2.01004 12.9302 2.88004L14.8202 7.92004C15.0502 8.54004 15.8002 8.76004 16.3402 8.38004L20.3402 5.52004C21.1402 4.95004 22.1902 5.75004 21.8602 6.67004L17.7002 18.32C17.5702 18.71 17.1902 18.98 16.7702 18.98Z"/>
          <path opacity="0.4" d="M17 22H7C6.59 22 6.25 21.66 6.25 21.25C6.25 20.84 6.59 20.5 7 20.5H17C17.41 20.5 17.75 20.84 17.75 21.25C17.75 21.66 17.41 22 17 22Z"/>
          <path fill="#000" d="M14.5 14.75H9.5C9.09 14.75 8.75 14.41 8.75 14C8.75 13.59 9.09 13.25 9.5 13.25H14.5C14.91 13.25 15.25 13.59 15.25 14C15.25 14.41 14.91 14.75 14.5 14.75Z"/>
        </svg>
      </div>
    </a>
    <a href="">
      <div class="duration-300 hover:opacity-70 icon w-[1.5rem] h-[1.5rem] text-primary">
        <svg viewBox="0 0 24 24" stroke="#fff" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill="currentColor" d="M19 8C20.6569 8 22 6.65685 22 5C22 3.34315 20.6569 2 19 2C17.3431 2 16 3.34315 16 5C16 6.65685 17.3431 8 19 8Z" stroke="transparent" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M14.02 2.2C13.36 2.07 12.69 2 12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 11.32 21.93 10.65 21.8 10.01" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
    </a>
    <a href="">
      <div class="duration-300 hover:opacity-70 text-white icon w-[1.7rem] h-[1.7rem]">
        <svg viewBox="0 0 24 24" stroke="#fff" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M12.62 20.8101C12.28 20.9301 11.72 20.9301 11.38 20.8101C8.48 19.8201 2 15.6901 2 8.6901C2 5.6001 4.49 3.1001 7.56 3.1001C9.38 3.1001 10.99 3.9801 12 5.3401C13.01 3.9801 14.63 3.1001 16.44 3.1001C19.51 3.1001 22 5.6001 22 8.6901C22 15.6901 15.52 19.8201 12.62 20.8101Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
    </a>
    <a href="" class="!mt-auto">
      <div class="duration-300 hover:opacity-70 text-white icon w-[1.5rem] h-[1.5rem]">
        <svg viewBox="0 0 24 24" stroke="#fff" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M12 18.5C15.5899 18.5 18.5 15.5899 18.5 12C18.5 8.41015 15.5899 5.5 12 5.5C8.41015 5.5 5.5 8.41015 5.5 12C5.5 15.5899 8.41015 18.5 12 18.5Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          <path opacity="0.6" d="M19.14 19.14L19.01 19.01M19.01 4.99L19.14 4.86L19.01 4.99ZM4.86 19.14L4.99 19.01L4.86 19.14ZM12 2.08V2V2.08ZM12 22V21.92V22ZM2.08 12H2H2.08ZM22 12H21.92H22ZM4.99 4.99L4.86 4.86L4.99 4.99Z"  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
    </a>
    <a href="" >
      <div class="duration-300 hover:opacity-70 text-white icon w-[1.5rem] h-[1.5rem]">
        <svg viewBox="0 0 24 24" stroke="#fff" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M3 9.10986V14.8799C3 16.9999 3 16.9999 5 18.3499L10.5 21.5299C11.33 22.0099 12.68 22.0099 13.5 21.5299L19 18.3499C21 16.9999 21 16.9999 21 14.8899V9.10986C21 6.99986 21 6.99986 19 5.64986L13.5 2.46986C12.68 1.98986 11.33 1.98986 10.5 2.46986L5 5.64986C3 6.99986 3 6.99986 3 9.10986Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          <path opacity="0.6" d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
    </a>
    <div class="profile">
      <a href="#" class="w-full h-full rounded-full flex overflow-hidden">
        <img src="https://i.imgur.com/qNst8b7.png" alt="">
      </a>
    </div>
  </aside>
  <script>
    
  let btn = document.querySelector('.toggle-btn');
  let sidebar = document.querySelector('.sidebar-left');

  btn.addEventListener('click', function () {
    document.querySelector('.sidebar-menu').scrollTop = 0;
    sidebar.classList.toggle('closed');

  });

  function openSidebar(){
    sidebar.classList.remove('closed');
    setTimeout(() => {
      document.querySelector('#search').focus();
    }, 300);
  }

  function toggleSidebar(){
    sidebar.classList.remove('closed');
    sidebar.classList.toggle('-translate-x-full');
  }
    
  </script>
</body>
<!-- partial -->
  <script  src="/frontend/script.js"></script>
  <script
  src="https://kit.fontawesome.com/23cecef777.js"
  crossorigin="anonymous"></script>
</body>


@yield('extrascripts')

</html>
