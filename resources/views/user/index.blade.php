@extends('user.layouts.layout1')
@section('extras')
<style>
   @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
   * {
   font-family: 'Poppins', sans-serif;
   }
   * {
   padding: 0;
   margin: 0;
   }
   body {
   background-color: #121212;
   font-family: 'Montserrat', sans-serif;
   }
   .sidebar {
   position: fixed;
   left: 0;
   top: 0;
   bottom: 0;
   width: 196px;
   background-color: #000000;
   padding: 24px;
   }
   .sidebar .logo img {
   width: 130px;
   }
   .sidebar .navigation ul {
   list-style: none;
   margin-top: 20px;
   }
   .sidebar .navigation ul li {
   padding: 10px 0px;
   }
   .sidebar .navigation ul li a {
   color: #b3b3b3;
   text-decoration: none;
   font-weight: bold;
   font-size: 13px;
   }
   .sidebar .navigation ul li a:hover,
   .sidebar .navigation ul li a:active,
   .sidebar .navigation ul li a:focus {
   color: #ffffff;
   }
   .sidebar .navigation ul li a:hover .fa,
   .sidebar .navigation ul li a:active .fa,
   .sidebar .navigation ul li a:focus .fa {
   color: #b3b3b3;
   }
   .sidebar .navigation ul li .fa {
   font-size: 20px;
   margin-right: 10px;
   }
   .sidebar .navigation ul li a:hover .fa:hover,
   .sidebar .navigation ul li a:hover .fa:active,
   .sidebar .navigation ul li a:hover .fa:focus {
   color: #ffffff;
   }
   .sidebar .policies {
   position: absolute;
   bottom: 100px;
   }
   .sidebar .policies ul {
   list-style: none;
   }
   .sidebar .policies ul li {
   padding-bottom: 5px;
   }
   .sidebar .policies ul li a {
   color: #b3b3b3;
   font-weight: 500;
   text-decoration: none;
   font-size: 10px;
   }
   .sidebar .policies ul li a:hover,
   .sidebar .policies ul li a:active,
   .sidebar .policies ul li a:focus {
   text-decoration: underline;
   }
   .main-container {
   }
   .topbar {
   display: flex;
   justify-content: space-between;
   background-color: #101010;
   padding: 14px 30px;
   }
   .topbar .prev-next-buttons button {
   color: #7a7a7a;
   cursor: not-allowed;
   width: 34px;
   height: 34px;
   border-radius: 100%;
   font-size: 18px;
   border: 0px;
   background-color: #090909;
   margin-right: 10px;
   }
   .topbar .navbar {
   display: flex;
   align-items: center;
   }
   .topbar .navbar ul {
   list-style: none;
   }
   .topbar .navbar ul li {
   display: inline-block;
   margin: 0px 8px;
   width: 70px;
   }
   .topbar .navbar ul li a {
   color: #b3b3b3;
   text-decoration: none;
   font-weight: bold;
   font-size: 14px;
   letter-spacing: 1px;
   }
   .topbar .navbar ul li a:hover,
   .topbar .navbar ul li a:active,
   .topbar .navbar ul li a:focus {
   color: #ffffff;
   font-size: 15px;
   }
   .topbar .navbar ul li.divider {
   color: #ffffff;
   font-size: 26px;
   margin: 0px 20px;
   width: auto;
   }
   .topbar .navbar button {
   background-color: #ffffff;
   color: #000000;
   font-size: 16px;
   font-weight: bold;
   padding: 14px 30px;
   border: 0px;
   border-radius: 40px;
   cursor: pointer;
   margin-left: 20px;
   }
   .topbar .navbar button:hover,
   .topbar .navbar button:active,
   .topbar .navbar button:focus {
   background-color: #f2f2f2;
   }
   .spotify-playlists {
   padding: 20px 40px;
   }
   .spotify-playlists h2 {
   color: #ffffff;
   font-size: 22px;
   margin-bottom: 20px;
   }
   .spotify-playlists .list {
   width: 100%;
   display: inline-block;
   gap: 20px;
   overflow-y: scroll;
   }
   .spotify-playlists .list .item {
   display: block;
   min-width: 400px;
   width: 100%;
   padding: 15px;
   margin-bottom: 20px;
   background-color: #181818;
   border-radius: 6px;
   cursor: pointer;
   transition: all ease 0.4s;
   }
   .spotify-playlists .list .item:hover {
   background-color: #252525;
   }
   .spotify-playlists .list .item img {
   width: 169px;
   border-radius: 6px;
   margin-bottom: 10px;
   }
   .spotify-playlists .list .item .play {
   position: relative;
   }
   .spotify-playlists .list .item .play .fa {
   position: absolute;
   right: 10px;
   top: -60px;
   padding: 18px;
   background-color: #1db954;
   border-radius: 100%;
   opacity: 0;
   transition: all ease 0.4s;
   }
   .spotify-playlists .list .item:hover .play .fa {
   opacity: 1;
   transform: translateY(-20px);
   }
   .spotify-playlists .list .item h4 {
   color: #ffffff;
   font-size: 14px;
   margin-bottom: 10px;
   word-wrap: break-word;
   }
   .spotify-playlists .list .item p {
   color: #989898;
   font-size: 12px;
   line-height: 20px;
   font-weight: 600;
   }
   .spotify-playlists hr {
   margin: 70px 0px 0px;
   border-color: #636363;
   }
   .preview {
   position: fixed;
   bottom: 0;
   left: 0;
   right: 0;
   background: linear-gradient(to right, #ae2896, #509bf5);
   padding: 15px 40px;
   display: flex;
   justify-content: space-between;
   }
   .preview h6 {
   color: #ffffff;
   text-transform: uppercase;
   font-weight: 400;
   font-size: 12px;
   margin-bottom: 10px;
   }
   .preview p {
   color: #ffffff;
   font-size: 14px;
   font-weight: 500;
   }
   .preview button {
   background-color: #ffffff;
   color: #000000;
   font-size: 16px;
   font-weight: bold;
   padding: 14px 30px;
   border: 0px;
   border-radius: 40px;
   cursor: pointer;
   }
   .index-playlist{
   padding: 20px 40px;
   }
   .index-playlist h2 {
   color: #ffffff;
   font-size: 22px;
   margin-bottom: 20px;
   }
   .index-playlist .list {
   display: flex;
   gap: 20px;
   flex-wrap: wrap;
   flex-direction: row;
   overflow-x: auto;
   }
   .index-playlist .list .item {
   min-width: 140px;
   width: 160px;
   padding: 15px;
   background-color: #181818;
   border-radius: 6px;
   cursor: pointer;
   transition: all ease 0.4s;
   }
   .index-playlist .list .item:hover {
   background-color: #252525;
   }
   .index-playlist .list .item img {
   width: 100%;
   border-radius: 6px;
   margin-bottom: 10px;
   }
   .index-playlist .list .item .play {
   position: relative;
   }
   .index-playlist .list .item .play .fa {
   position: absolute;
   right: 10px;
   top: -60px;
   padding: 18px;
   background-color: #1db954;
   border-radius: 100%;
   opacity: 0;
   transition: all ease 0.4s;
   }
   .index-playlist .list .item:hover .play .fa {
   opacity: 1;
   transform: translateY(-20px);
   }
   .index-playlist .list .item h4 {
   color: #ffffff;
   font-size: 14px;
   margin-bottom: 10px;
   word-wrap: break-word;
   }
   .index-playlist .list .item p {
   color: #989898;
   font-size: 12px;
   line-height: 20px;
   font-weight: 600;
   }
   .index-playlist hr {
   margin: 70px 0px 0px;
   border-color: #636363;
   }
</style>
@endsection
@section('content')
@include('user.audioplayer' , ['entry' => 'get-ads-as-json' ,  'playlist_id' => 69420])
<div class="content">
   <div class="spotify-playlists">
      <h2>Quảng cáo</h2>
      <div class="list">
         @foreach ($ads as $index => $ad)
         <div class="item" style="background: linear-gradient( rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8) ), url('{{$ad->banner}}'); background-position: center;" onclick="playAds({{$index}})">
            <img src="{{$ad->hinhanh}}"style="height:100px ; width: 100px; object-fit: cover;"/>
            <div class="play">
               <span class="fa fa-play"></span>
            </div>
            <h4>{{$ad->TenBaiHat}}</h4>
            <p>{{$ad->noidung}}</p>
         </div>
         @endforeach
      </div>
   </div>
   <div class="spotify-playlists" >
      <h2>Danh sách được yêu thich</h2>
      <table class="song-list table-fixed text-alt2 font-light text-[13px] mt-[1.25rem] "width="100%">
        <tbody>
          @foreach ($baihats as $index => $baihat)
          <tr class="currently-playing">
            
            <td class="relative" onclick="playFav({{$index}})">
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
                <img src="{{$baihat->HinhBaiHat}}" class="w-auto object-cover w-[2.5rem] h-[2.5rem] rounded-md" alt="">
              </a>
            </td>
            <td class="font-medium">
              <div class="flex-col !items-start">
                <a href="#" class="duration-300 flex w-max hover:translate-x-[0.25rem]">{{$baihat->Casi}}</a>
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
            <td class="hidden md:table-cell">{{$baihat->TenBaiHat}}</td>
            <td class="hidden sm:table-cell">
              <div>
                <div class="icon mr-[0.5rem] w-[1.1rem] h-[1.1rem]">
                  <svg viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.62 20.8101C12.28 20.9301 11.72 20.9301 11.38 20.8101C8.48 19.8201 2 15.6901 2 8.6901C2 5.6001 4.49 3.1001 7.56 3.1001C9.38 3.1001 10.99 3.9801 12 5.3401C13.01 3.9801 14.63 3.1001 16.44 3.1001C19.51 3.1001 22 5.6001 22 8.6901C22 15.6901 15.52 19.8201 12.62 20.8101Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
                </div>
                <span>{{$baihat->LuotThich}}</span>
              </div>
            </td>

            <td class="hidden sm:table-cell"
            onclick="javascript:(function() { 
               window.location.href = '{{route('add-like' , ['id' => $baihat->idBaiHat])}}';
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
   <div class="index-playlist">
      <h2>Nhạc mới mỗi ngày</h2>
      <div class="list">
         @foreach ($playlists as $index =>$playlist)
         <div class="item"
            onclick="javascript:(function() { 
            window.location.href='{{route('Detailplaylist' , ['id' => $playlist->idPayList])}}'
            })()"
            >
            <img src="{{$playlist->HinhIcon}}"  style="height: 130px; width:130px"/>
            <div class="play">
               <span class="fa fa-play"></span>
            </div>
            <h4>{{$playlist->Ten}}</h4>
         </div>
         @endforeach
      </div>
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
            <img src="/frontend/wDnkwVF.png" alt="">
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

  </div>
  --}}

@endsection