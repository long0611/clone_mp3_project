@extends('user.layouts.layout1')

@section('content')
@include('user.audioplayer' , ['entry' => 'get-album-as-json' ,  'playlist_id' => $albumObj->idAlbum])
<div class="content flex-1">
    <div class="font-light flex flex-shrink-0 relative flex-col w-full h-[18rem]">
      <div class="w-full h-[18rem] bg-cover" style="background-image: url(https://i.imgur.com/jbjDNHM.jpeg); background-position: 0 30%"></div>
      <div class="flex text-alt2 absolute top-0 left-0 w-full h-[14rem] bg-black bg-opacity-50 p-[1.5rem]">
        <div>
          <div class="h-[2.5rem] flex breadcrumb">
            <a href="#" class="text-hover">Home</a>
            <a href="#" class="text-alt4 text-hover">{{$albumObj->TenAlbum}}</a>
          </div>
          <div class="mt-[1.5rem] h-[1.5rem] flex items-center uppercase text-alt4 text-sm font-medium tracking-wide">Albums</div>
          <div class="h-[4rem] flex items-center space-x-[0.5rem]">
            <h1 class="text-[3rem] text-white p-0 m-0 font-medium">{{$albumObj->TenAlbum}}</h1>
            <div class="icon mt-[1rem] scale-110">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" >
                <rect id="svg_2" height="256.46268" width="256" y="128" x="128" fill="#ffffff"/>
                <path fill="#00a1f1" d="M512,268c0,17.9-4.3,34.5-12.9,49.7c-8.6,15.2-20.1,27.1-34.6,35.4c0.4,2.7,0.6,6.9,0.6,12.6
                c0,27.1-9.1,50.1-27.1,69.1c-18.1,19.1-39.9,28.6-65.4,28.6c-11.4,0-22.3-2.1-32.6-6.3c-8,16.4-19.5,29.6-34.6,39.7
                C290.4,507,273.9,512,256,512c-18.3,0-34.9-4.9-49.7-14.9c-14.9-9.9-26.3-23.2-34.3-40c-10.3,4.2-21.1,6.3-32.6,6.3
                c-25.5,0-47.4-9.5-65.7-28.6c-18.3-19-27.4-42.1-27.4-69.1c0-3,0.4-7.2,1.1-12.6c-14.5-8.4-26-20.2-34.6-35.4
                C4.3,302.5,0,285.9,0,268c0-19,4.8-36.5,14.3-52.3c9.5-15.8,22.3-27.5,38.3-35.1c-4.2-11.4-6.3-22.9-6.3-34.3
                c0-27,9.1-50.1,27.4-69.1c18.3-19,40.2-28.6,65.7-28.6c11.4,0,22.3,2.1,32.6,6.3c8-16.4,19.5-29.6,34.6-39.7
                C221.6,5.1,238.1,0,256,0c17.9,0,34.4,5.1,49.4,15.1c15,10.1,26.6,23.3,34.6,39.7c10.3-4.2,21.1-6.3,32.6-6.3
                c25.5,0,47.3,9.5,65.4,28.6c18.1,19.1,27.1,42.1,27.1,69.1c0,12.6-1.9,24-5.7,34.3c16,7.6,28.8,19.3,38.3,35.1
                C507.2,231.5,512,249,512,268z M245.1,345.1l105.7-158.3c2.7-4.2,3.5-8.8,2.6-13.7c-1-4.9-3.5-8.8-7.7-11.4
                c-4.2-2.7-8.8-3.6-13.7-2.9c-5,0.8-9,3.2-12,7.4l-93.1,140L184,263.4c-3.8-3.8-8.2-5.6-13.1-5.4c-5,0.2-9.3,2-13.1,5.4
                c-3.4,3.4-5.1,7.7-5.1,12.9c0,5.1,1.7,9.4,5.1,12.9l58.9,58.9l2.9,2.3c3.4,2.3,6.9,3.4,10.3,3.4
                C236.6,353.7,241.7,350.9,245.1,345.1z"/>
              </svg>          
            </div>
          </div>
          <div class="h-[1.5rem] flex items-center space-x-[0.5rem]">
            <div class="icon self-start">
              <svg stroke="#fff" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.46005 18.4898V15.5698C5.46005 14.5998 6.22005 13.7298 7.30005 13.7298C8.27005 13.7298 9.14005 14.4898 9.14005 15.5698V18.3798C9.14005 20.3298 7.52005 21.9498 5.57005 21.9498C3.62005 21.9498 2.00005 20.3198 2.00005 18.3798V12.2198C1.89005 6.5998 6.33005 2.0498 11.95 2.0498C17.57 2.0498 22 6.5998 22 12.1098V18.2698C22 20.2198 20.38 21.8398 18.43 21.8398C16.48 21.8398 14.86 20.2198 14.86 18.2698V15.4598C14.86 14.4898 15.62 13.6198 16.7 13.6198C17.67 13.6198 18.54 14.3798 18.54 15.4598V18.4898" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>

          </div>
        </div>
        <div class="ml-auto flex flex-col items-end">
          <div class="flex items-center space-x-[1rem]">
            <a href="#" class="duration-300 hover:bg-black hover:bg-opacity-20 h-[2rem] w-[2rem] rounded-full flex justify-center items-center space-x-[0.2rem]" >
              <span class="bg-white rounded-full w-[0.3rem] h-[0.3rem]"></span>
              <span class="bg-white rounded-full w-[0.3rem] h-[0.3rem]"></span>
              <span class="bg-white rounded-full w-[0.3rem] h-[0.3rem]"></span>
            </a>
            <div onclick="toggleSidebar()" class="icon w-[2rem] h-[2rem] lg:hidden">
              <svg viewBox="0 0 24 24" stroke="#fff" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3 7H21" stroke-width="1.5" stroke-linecap="round"/>
                <path opacity="0.6" d="M3 12H21"stroke-width="1.5" stroke-linecap="round"/>
                <path d="M3 17H21" stroke-width="1.5" stroke-linecap="round"/>
              </svg>
            </div>
          </div>
          <div class="mt-auto h-[3rem] flex space-x-[1rem]">
            <div class="hover:bg-opacity-90 duration-300 cursor-pointer bg-primary bg-opacity-80 backdrop-blur-md h-full rounded-full text-white px-[1.5rem] md:px-[2rem] lg:px-[2.5rem] uppercase font-medium text-sm md:text-base lg:text-lg flex items-center justify-center">Play</div>
            <div class="hidden sm:flex hover:bg-opacity-20 duration-300 cursor-pointer bg-black bg-opacity-10 backdrop-blur-lg h-full rounded-full text-white pl-[0.75rem] pr-[1.5rem] border-2 border-[#737373] items-center justify-center">
              <div class="icon w-[1.75rem] h-[1.75rem]">
                <svg viewBox="0 0 24 24" fill="#fff" xmlns="http://www.w3.org/2000/svg">
                  <path d="M10.5795 15.5801C10.3795 15.5801 10.1895 15.5001 10.0495 15.3601L7.21945 12.5301C6.92945 12.2401 6.92945 11.7601 7.21945 11.4701C7.50945 11.1801 7.98945 11.1801 8.27945 11.4701L10.5795 13.7701L15.7195 8.6301C16.0095 8.3401 16.4895 8.3401 16.7795 8.6301C17.0695 8.9201 17.0695 9.4001 16.7795 9.6901L11.1095 15.3601C10.9695 15.5001 10.7795 15.5801 10.5795 15.5801Z"/>
                </svg>
              </div>
              <span class="text-sm">Following</span>
            </div>
          </div>
        </div>
      </div>
      <header class="font-light absolute bottom-0 w-full h-[4rem] flex items-center justify-between bg-[#2c2c2c] bg-opacity-90">
        <nav class="h-full z-30">
          <ul class="text-sm sm:text-base flex h-full text-alt space-x-[1.5rem] sm:space-x-[2rem] pl-[1.5rem]">
            <li class="!font-medium !text-white text-base sm:text-lg relative h-full"><a href="#" class="text-hover h-full flex items-center">Popular</a></li>

          </ul>
        </nav>
        <div class="hidden md:flex z-30 pr-[2rem] space-x-[0.25rem] text-sm items-center ">
          <div class="icon">
            <svg stroke="#fff" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M9.16055 10.87C9.06055 10.86 8.94055 10.86 8.83055 10.87C6.45055 10.79 4.56055 8.84 4.56055 6.44C4.56055 3.99 6.54055 2 9.00055 2C11.4505 2 13.4405 3.99 13.4405 6.44C13.4305 8.84 11.5405 10.79 9.16055 10.87Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path opacity="0.4" d="M16.4093 4C18.3493 4 19.9093 5.57 19.9093 7.5C19.9093 9.39 18.4093 10.93 16.5393 11C16.4593 10.99 16.3693 10.99 16.2793 11" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M4.1607 14.56C1.7407 16.18 1.7407 18.82 4.1607 20.43C6.9107 22.27 11.4207 22.27 14.1707 20.43C16.5907 18.81 16.5907 16.17 14.1707 14.56C11.4307 12.73 6.9207 12.73 4.1607 14.56Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path opacity="0.4" d="M18.3398 20C19.0598 19.85 19.7398 19.56 20.2998 19.13C21.8598 17.96 21.8598 16.03 20.2998 14.86C19.7498 14.44 19.0798 14.16 18.3698 14" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>

        </div>
        <div class="header-bg"></div>
        <span style="--offset-left: 1.5rem"></span>
      </header>
    </div>
    <div class="flex flex-col w-full flex-1 px-[1.25rem] py-[2rem] pr-0">
      <div class="flex space-x-[0.5rem]">
        <h3 class="text-white text-xl tracking-wider">The list</h3>
        <span class="text-xs text-alt mt-[0.6rem]">{{$albums->count()}} bài hát</span>
      </div>
      <table class="song-list table-fixed text-alt2 font-light text-[13px] mt-[1.25rem]">
        <tbody>
          @foreach ($albums as $index => $album)
          <tr class="currently-playing">
            <td class="relative" onclick="playTrack({{$index}})">
              <span class="duration-300 absolute icon">#{{$index + 1}}</span>
              <div onclick="this.classList.toggle('paused')" class="icon select-none music-actions relative">
  
                <div class="absolute icon playing duration-300">
                  <svg stroke="currentColor" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M3 8.25V15.75"/>
                    <path opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M7.5 5.75V18.25"/>
                    <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M12 3.25V20.75"/>
                    <path opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M16.5 5.75V18.25"/>
                    <path opacity="0.8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M21 8.25V15.75"/>
                  </svg>
                </div>
  
                <div class="absolute icon pause duration-300 opacity-0 invisible cursor-pointer">
                  <svg fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.3 21H14.7C19.2 21 21 19.2 21 14.7V9.3C21 4.8 19.2 3 14.7 3H9.3C4.8 3 3 4.8 3 9.3V14.7C3 19.2 4.8 21 9.3 21Z" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </div>
  
                <div class="absolute icon play duration-300 opacity-0 invisible cursor-pointer">
                  <svg fill="currentColor" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 11.9999V8.43989C4 4.01989 7.13 2.2099 10.96 4.4199L14.05 6.1999L17.14 7.9799C20.97 10.1899 20.97 13.8099 17.14 16.0199L14.05 17.7999L10.96 19.5799C7.13 21.7899 4 19.9799 4 15.5599V11.9999Z" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </div>
  
              </div>
            </td>
            <td class="w-[4rem]">
              <a href="#" class="flex ml-[0.5rem] w-max">
                <img src="{{$album->HinhBaiHat}}" class="w-auto object-cover w-[2.5rem] h-[2.5rem] rounded-md" alt="">
              </a>
            </td>
            <td class="font-medium">
              <div class="flex-col !items-start">
                <a href="#" class="duration-300 flex w-max hover:translate-x-[0.25rem]">{{$album->Casi}}</a>
                <div class="text-alt text-xs sm:hidden flex">
                  <div class="icon mr-[0.5rem] w-[0.85rem] h-[0.85rem]">
                    <svg stroke="#fff" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M5.4796 18.4898V15.5698C5.4796 14.5998 6.2396 13.7298 7.3196 13.7298C8.2896 13.7298 9.15959 14.4898 9.15959 15.5698V18.3798C9.15959 20.3298 7.53959 21.9498 5.58959 21.9498C3.63959 21.9498 2.01958 20.3198 2.01958 18.3798V12.2198C1.90958 6.59979 6.34959 2.0498 11.9696 2.0498C17.5896 2.0498 22.0196 6.5998 22.0196 12.1098V18.2698C22.0196 20.2198 20.3996 21.8398 18.4496 21.8398C16.4996 21.8398 14.8796 20.2198 14.8796 18.2698V15.4598C14.8796 14.4898 15.6396 13.6198 16.7196 13.6198C17.6896 13.6198 18.5596 14.3798 18.5596 15.4598V18.4898" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      <path opacity="0.4" d="M15.53 9.11999H14.72C14.5 9.11999 14.29 9.25 14.19 9.44L13.44 10.94C13.33 11.16 13.02 11.16 12.91 10.94L11.07 7.27002C10.96 7.06002 10.66 7.05001 10.55 7.26001L9.70996 8.80999C9.60996 8.99999 9.40997 9.11999 9.18997 9.11999H8.45996" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                  </div>
                  <span>990,573,569</span>
                </div>
              </div>
              
            </td>
            <td class="hidden md:table-cell">{{$album->TenBaiHat}}</td>
            <td class="hidden sm:table-cell">
              <div>
                <div class="icon mr-[0.5rem] w-[1.1rem] h-[1.1rem]">
                  <svg viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.62 20.8101C12.28 20.9301 11.72 20.9301 11.38 20.8101C8.48 19.8201 2 15.6901 2 8.6901C2 5.6001 4.49 3.1001 7.56 3.1001C9.38 3.1001 10.99 3.9801 12 5.3401C13.01 3.9801 14.63 3.1001 16.44 3.1001C19.51 3.1001 22 5.6001 22 8.6901C22 15.6901 15.52 19.8201 12.62 20.8101Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
                </div>
                <span>{{$album->LuotThich}}</span>
              </div>
            </td>

            <td class="hidden sm:table-cell"
            onclick="javascript:(function() { 
              window.location.href = '{{route('add-like' , ['id' => $album->idBaiHat])}}';
            })()"
            >
              <div class="duration-300 hover:text-primary icon cursor-pointer">
                <svg viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M12.62 20.8101C12.28 20.9301 11.72 20.9301 11.38 20.8101C8.48 19.8201 2 15.6901 2 8.6901C2 5.6001 4.49 3.1001 7.56 3.1001C9.38 3.1001 10.99 3.9801 12 5.3401C13.01 3.9801 14.63 3.1001 16.44 3.1001C19.51 3.1001 22 5.6001 22 8.6901C22 15.6901 15.52 19.8201 12.62 20.8101Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </div>
            </td>
            <td>
              <div class="mr-[0.5rem] cursor-pointer group h-[1.5rem] w-[1.5rem] flex justify-center items-center space-x-[0.15rem]">
                <span class="duration-300 group-hover:bg-white bg-current rounded-full w-[0.25rem] h-[0.25rem]"></span>
                <span class="duration-300 group-hover:bg-white bg-current rounded-full w-[0.25rem] h-[0.25rem]"></span>
                <span class="duration-300 group-hover:bg-white bg-current rounded-full w-[0.25rem] h-[0.25rem]"></span>
              </div>
            </td>
          </tr>
          @endforeach

        </tbody>
        
      </table>
    </div>
  </div>
  {{-- <div class="flexh-shrink-0 h-[8.5rem] flex items-center px-[1.25rem]">
    <a href="#" class="hidden sm:inline flex-shrink-0">
      <img src="https://i.imgur.com/ApxXsDK.jpeg" class="object-cover w-[6rem] h-[6rem] rounded-lg shadow-md" alt="">
    </a>
    <div class="flex flex-col ml-[1.25rem] sm:ml-[3.75rem] mr-[1.25rem] flex-1 h-full py-[1.25rem] text-[11px] justify-between">
      <div class="flex justify-between text-alt">
        <div class="flex items-center space-x-[1rem]">
          <div class="cursor-pointer duration-300 hover:text-primary icon w-[1.25rem] h-[1.25rem] sm:w-[1.5rem] sm:h-[1.5rem]">
            <svg viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M12.62 20.8101C12.28 20.9301 11.72 20.9301 11.38 20.8101C8.48 19.8201 2 15.6901 2 8.6901C2 5.6001 4.49 3.1001 7.56 3.1001C9.38 3.1001 10.99 3.9801 12 5.3401C13.01 3.9801 14.63 3.1001 16.44 3.1001C19.51 3.1001 22 5.6001 22 8.6901C22 15.6901 15.52 19.8201 12.62 20.8101Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
          </div>
          <div class="cursor-pointer duration-300 hover:text-white icon w-[1.25rem] h-[1.25rem] sm:w-[1.5rem] sm:h-[1.5rem]">
            <svg viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M9.32031 11.6797L11.8803 14.2397L14.4403 11.6797" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M11.8809 4V14.17" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
              <path opacity="0.6" d="M20 12.1802C20 16.6002 17 20.1802 12 20.1802C7 20.1802 4 16.6002 4 12.1802" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
        </div>
        <div class="flex items-center space-x-[0.75rem]">

          <div class="cursor-pointer duration-300 hover:text-white icon w-[1.25rem] h-[1.25rem] sm:w-[1.5rem] w-[1.25rem] h-[1.25rem] sm:h-[1.5rem]">
            <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path opacity="0.7" d="M20.2409 7.22005V16.7901C20.2409 18.7501 18.111 19.98 16.411 19L12.261 16.61L8.11094 14.21C6.41094 13.23 6.41094 10.78 8.11094 9.80004L12.261 7.40004L16.411 5.01006C18.111 4.03006 20.2409 5.25005 20.2409 7.22005Z"/>
              <path d="M3.75977 18.9298C3.34977 18.9298 3.00977 18.5898 3.00977 18.1798V5.81982C3.00977 5.40982 3.34977 5.06982 3.75977 5.06982C4.16977 5.06982 4.50977 5.40982 4.50977 5.81982V18.1798C4.50977 18.5898 4.16977 18.9298 3.75977 18.9298Z"/>
            </svg>
          </div>
          <div class="cursor-pointer duration-300 hover:text-white icon w-[1.25rem] h-[1.25rem] sm:w-[1.5rem] w-[1.25rem] h-[1.25rem] sm:h-[1.5rem]">
            <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path opacity="0.5" d="M22.0002 8.33983V15.6598C22.0002 17.1598 20.3703 18.0998 19.0703 17.3498L15.9002 15.5198L12.7303 13.6898L12.2402 13.4098V10.5898L12.7303 10.3098L15.9002 8.47984L19.0703 6.64983C20.3703 5.89983 22.0002 6.83983 22.0002 8.33983Z"/>
              <path d="M12.2394 8.33983V15.6598C12.2394 17.1598 10.6095 18.0998 9.31946 17.3498L6.13947 15.5198L2.96945 13.6898C1.67945 12.9398 1.67945 11.0598 2.96945 10.3098L6.13947 8.47984L9.31946 6.64983C10.6095 5.89983 12.2394 6.83983 12.2394 8.33983Z"/>
            </svg>
          </div>
          <div class="duration-300 cursor-pointer w-[2.5rem] h-[2.5rem] sm:w-[3rem] sm:h-[3rem] flex items-center justify-center hover:opacity-100 opacity-90">
            <img src="https://i.imgur.com/wDnkwVF.png" alt="">
          </div>
          <div class="cursor-pointer duration-300 hover:text-white icon w-[1.25rem] h-[1.25rem] sm:w-[1.5rem] w-[1.25rem] h-[1.25rem] sm:h-[1.5rem]">
            <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path opacity="0.6" d="M2 8.33983V15.6598C2 17.1598 3.62999 18.0998 4.92999 17.3498L8.10001 15.5198L11.27 13.6898L11.76 13.4098V10.5898L11.27 10.3098L8.10001 8.47984L4.92999 6.64983C3.62999 5.89983 2 6.83983 2 8.33983Z"/>
              <path d="M11.7598 8.33983V15.6598C11.7598 17.1598 13.3897 18.0998 14.6797 17.3498L17.8597 15.5198L21.0298 13.6898C22.3198 12.9398 22.3198 11.0598 21.0298 10.3098L17.8597 8.47984L14.6797 6.64983C13.3897 5.89983 11.7598 6.83983 11.7598 8.33983Z"/>
            </svg>
          </div>
          <div class="cursor-pointer duration-300 hover:text-white icon w-[1.25rem] h-[1.25rem] sm:w-[1.5rem] w-[1.25rem] h-[1.25rem] sm:h-[1.5rem]">
            <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M3.75977 7.22005V16.7901C3.75977 18.7501 5.88975 19.98 7.58975 19L11.7397 16.61L15.8898 14.21C17.5898 13.23 17.5898 10.78 15.8898 9.80004L11.7397 7.40004L7.58975 5.01006C5.88975 4.03006 3.75977 5.25005 3.75977 7.22005Z" />
              <path opacity="0.4" d="M20.2402 18.9298C19.8302 18.9298 19.4902 18.5898 19.4902 18.1798V5.81982C19.4902 5.40982 19.8302 5.06982 20.2402 5.06982C20.6502 5.06982 20.9902 5.40982 20.9902 5.81982V18.1798C20.9902 18.5898 20.6602 18.9298 20.2402 18.9298Z"/>
            </svg>
          </div>
          
        </div>
        <div class="flex items-center space-x-[1rem]">
          <div class="cursor-pointer duration-300 hover:text-white icon w-[1.25rem] h-[1.25rem] sm:w-[1.5rem] sm:h-[1.5rem]">
            <svg viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M3 17.9818L5.54999 17.9919C6.45999 17.9919 7.31 17.5418 7.81 16.7918L14.2 7.21189C14.7 6.46189 15.55 6.00188 16.46 6.01188L21.01 6.0319" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path opacity="0.4" d="M8.89001 8.62017L7.81 7.12017C7.3 6.41017 6.47999 5.99017 5.60999 6.00017L3 6.01018" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <g opacity="0.4">
                <path d="M19 19.9805L21 17.9805" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M12.9688 15.3789L14.1888 16.9489C14.6988 17.6089 15.4987 17.9989 16.3387 17.9989L21.0088 17.9789" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </g>
              <path d="M21 6.01953L19 4.01953" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>

          </div>
          <div class="cursor-pointer duration-300 hover:text-white icon w-[1.25rem] h-[1.25rem] sm:w-[1.5rem] sm:h-[1.5rem]">
            <svg viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M13.9983 3L16.4383 5.34003L8.48828 5.32001C4.91828 5.32001 1.98828 8.25003 1.98828 11.84C1.98828 13.63 2.71827 15.26 3.89827 16.44" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M9.9986 20.9986L7.55859 18.6586L15.5086 18.6786C19.0786 18.6786 22.0086 15.7486 22.0086 12.1586C22.0086 10.3686 21.2786 8.73859 20.0986 7.55859" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
        </div>
      </div>
      <div class="flex items-center py-[0.25rem]">
        <span class="text-white">2:29</span>
        <div class="cursor-pointer mx-[1.25rem] bg-[#2c2c2c] duration-300 hover:bg-opacity-70 flex-1 h-[5px] rounded-full relative">
          <span class="bg-white absolute left-0 top-0 w-2/3 h-[5px] rounded-full"></span>
        </div>
        <span class="text-alt">3:45</span>
      </div>
    </div>

  </div> --}}
@endsection