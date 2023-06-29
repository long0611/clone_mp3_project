<style>
  #searchResult {
    display: none;
  }
</style>

<script>
  var searchedData;
  function searching(evt){
    $.ajax({
          url: "{{route('searching', '')}}"+"/"+evt.value,
          dataType: "json",
      })
      .done(function( data ) {
        searchedData = data;
        document.getElementById('searchResult').style.display = "block";
        document.getElementById('searchedTitle').innerHTML = data[0].TenBaiHat;
        document.getElementById('searchedImage').src = data[0].HinhBaiHat;
        document.getElementById('searchedArtist').innerHTML = data[0].Casi;

      });
  }

  function playSearched(){
    playlistTracks = [];
    playlistTracks.push(searchedData[0]);
    playTrack(0);
  }
</script>




<aside class="absolute z-10 w-3/4 sm:w-1/2 -translate-x-full lg:translate-x-0 sidebar-left lg:relative lg:w-[18rem] flex-shrink-0 h-full py-[1.5rem] px-[1.25rem] bg-black backdrop-blur-xl bg-opacity-5">
    <div class="hidden lg:block toggle-btn icon cursor-pointer duration-300 hover:scale-110 p-[0.3rem] toggle-btn absolute w-[1.5rem] h-[1.5rem] bg-black bg-opacity-60 backdrop-blur-2xl rounded-full -right-0 top-0 translate-x-1/2 translate-y-[15.25rem]">
      <svg stroke="#fff" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M15 19.9201L8.47997 13.4001C7.70997 12.6301 7.70997 11.3701 8.47997 10.6001L15 4.08008" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </div>
    
    <div>
      <header class="flex justify-between items-center">
        <a href="#" class="inline-flex space-x-[1.25rem]">
          <div class="h-[2.5rem] flex-shrink-0">
            <img class="h-[2.5rem]" src="https://i.imgur.com/HYlxHuo.png" alt="">
          </div>
          <div class="closed-hide">
            <img class="h-[2.5rem]" src="https://i.imgur.com/DHjiMAT.png" alt="">
          </div>
        </a>
        <div class="closed-hide flex space-x-[0.5rem]">
          <div class="duration-300 hover:scale-110 icon bg-alt cursor-pointer rounded-full w-[1.5rem] h-[1.5rem] p-[0.35rem] bg-opacity-40">
            <svg stroke="#fff" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M15 19.9201L8.47997 13.4001C7.70997 12.6301 7.70997 11.3701 8.47997 10.6001L15 4.08008" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <div class="opacity-30 icon bg-alt rounded-full w-[1.5rem] h-[1.5rem] p-[0.35rem] bg-opacity-50">
            <svg stroke="#fff" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M8.91003 19.9201L15.43 13.4001C16.2 12.6301 16.2 11.3701 15.43 10.6001L8.91003 4.08008" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
        </div>
      </header>
  
      <div class="relative mt-[1.5rem] rounded-md bg-black bg-opacity-40 overflow-hidden text-alt text-opacity-60 focus-within:text-opacity-80">
        <input id="search" type="text" onchange="searching(this)" class="closed-hide md:block px-[2.5rem] duration-300 w-full outline-none bg-transparent h-[2.5rem] text-[13px] placeholder-current" placeholder="Search">
        <label for="search" onclick="openSidebar()" class="cursor-pointer h-[2.5rem] w-[2.5rem] absolute top-0 left-0 flex items-center justify-center">
          <div class="duration-300 icon">
            <svg viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M11.5 21C16.7467 21 21 16.7467 21 11.5C21 6.25329 16.7467 2 11.5 2C6.25329 2 2 6.25329 2 11.5C2 16.7467 6.25329 21 11.5 21Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path opacity="0.6" d="M22 22L20 20" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
        </label>
        <div class="closed-hide flex h-[2.5rem] w-[2.5rem] absolute top-0 right-0 items-center justify-center">
          <div class="duration-300 icon cursor-pointer hover:text-white hover:text-opacity-70">
            <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M22.75 17.5C22.75 17.91 22.41 18.25 22 18.25H15V18.5C15 20 14.1 20.5 13 20.5H7C5.9 20.5 5 20 5 18.5V18.25H2C1.59 18.25 1.25 17.91 1.25 17.5C1.25 17.09 1.59 16.75 2 16.75H5V16.5C5 15 5.9 14.5 7 14.5H13C14.1 14.5 15 15 15 16.5V16.75H22C22.41 16.75 22.75 17.09 22.75 17.5Z"/>
              <path opacity="0.4" d="M22.75 6.5C22.75 6.91 22.41 7.25 22 7.25H19V7.5C19 9 18.1 9.5 17 9.5H11C9.9 9.5 9 9 9 7.5V7.25H2C1.59 7.25 1.25 6.91 1.25 6.5C1.25 6.09 1.59 5.75 2 5.75H9V5.5C9 4 9.9 3.5 11 3.5H17C18.1 3.5 19 4 19 5.5V5.75H22C22.41 5.75 22.75 6.09 22.75 6.5Z"/>
            </svg>
          </div>
        </div>
      </div>

      <div id="searchResult" onclick="playSearched()">
        <ul class="list-group">
          <li class="list-group-item">
            <img src="" style="height: 50px; width: 50px" id="searchedImage"/>
            <span id="searchedTitle"></span>
            -
            <span id="searchedArtist"></span>
          </li>
        </ul>
      </div>


      <div class="sidebar-menu pb-[1.5rem]">
        <nav class="mt-[1.5rem] text-sm text-alt2">
          <h6 class="closed-hide uppercase text-[11px] text-alt tracking-wider ml-[0.5rem]">Menu</h6>
          <ul class="space-y-[0.25rem] mt-[1rem]">
            <li class="text-white">
              <a href="{{route('homepage')}}" class="inline-flex items-center h-[2.5rem] space-x-[1.25rem] hover:text-white">
                <div class="w-[2.5rem] flex justify-center">
                  <div class="icon w-[1.5rem] h-[1.5rem] duration-300">
                    <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path d="M20.83 8.01002L14.28 2.77002C13 1.75002 11 1.74002 9.72996 2.76002L3.17996 8.01002C2.23996 8.76002 1.66996 10.26 1.86996 11.44L3.12996 18.98C3.41996 20.67 4.98996 22 6.69996 22H17.3C18.99 22 20.59 20.64 20.88 18.97L22.14 11.43C22.32 10.26 21.75 8.76002 20.83 8.01002Z"/>
                      <path fill="#444" d="M12 18.75C11.59 18.75 11.25 18.41 11.25 18V15C11.25 14.59 11.59 14.25 12 14.25C12.41 14.25 12.75 14.59 12.75 15V18C12.75 18.41 12.41 18.75 12 18.75Z"/>
                    </svg>
                  </div>
                </div>
                <span class="closed-hide duration-300">Trang chủ</span>
              </a>
            </li>
            <li>
              <a href="{{route('explorer')}}" class="inline-flex items-center h-[2.5rem] space-x-[1.25rem] hover:text-white">
                <div class="w-[2.5rem] flex justify-center">
                  <div class="icon w-[1.5rem] h-[1.5rem] duration-300">
                    <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path opacity="0.4" d="M20.9808 3.0201C20.1108 2.1501 18.8808 1.8101 17.6908 2.1101L7.89084 4.5601C6.24084 4.9701 4.97084 6.2501 4.56084 7.8901L2.11084 17.7001C1.81084 18.8901 2.15084 20.1201 3.02084 20.9901C3.68084 21.6401 4.55084 22.0001 5.45084 22.0001C5.73084 22.0001 6.02084 21.9701 6.30084 21.8901L16.1108 19.4401C17.7508 19.0301 19.0308 17.7601 19.4408 16.1101L21.8908 6.3001C22.1908 5.1101 21.8508 3.8801 20.9808 3.0201Z"/>
                      <path d="M11.9991 15.8801C14.142 15.8801 15.8791 14.143 15.8791 12.0001C15.8791 9.85725 14.142 8.12012 11.9991 8.12012C9.85628 8.12012 8.11914 9.85725 8.11914 12.0001C8.11914 14.143 9.85628 15.8801 11.9991 15.8801Z"/>
                    </svg>
                  </div>
                </div>
                <span class="closed-hide duration-300">Khám phá</span>
              </a>
            </li>
            <li>
              <a href="{{route('albumsx')}}" class="inline-flex items-center h-[2.5rem] space-x-[1.25rem] hover:text-white">
                <div class="w-[2.5rem] flex justify-center">
                  <div class="icon w-[1.5rem] h-[1.5rem] duration-300">
                    
                    <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path d="M10.2894 10.3398V18.4098C10.2894 20.3898 8.66937 21.9998 6.69937 21.9998C4.71937 21.9998 3.10938 20.3898 3.10938 18.4098C3.10938 16.4398 4.71937 14.8298 6.69937 14.8298C7.52938 14.8298 8.27938 15.1198 8.88938 15.5898V10.7398L10.2894 10.3398Z"/>
                      <path d="M20.8909 7.31982V16.4798C20.8909 18.4598 19.2809 20.0698 17.3009 20.0698C15.3309 20.0698 13.7109 18.4598 13.7109 16.4798C13.7109 14.5098 15.3309 12.8998 17.3009 12.8998C18.1409 12.8998 18.8909 13.1898 19.5009 13.6698V7.71982L20.8909 7.31982Z"/>
                      <path opacity="0.4" d="M20.8906 5.18007V7.32007L8.89062 10.7401V6.75007C8.89062 5.28007 9.78062 4.14007 11.1906 3.76007L16.9706 2.18007C18.1406 1.86007 19.1306 1.97007 19.8306 2.51007C20.5406 3.04007 20.8906 3.94007 20.8906 5.18007Z"/>
                    </svg>
    
                  </div>
                </div>
                <span class="closed-hide duration-300">Albums</span>
              </a>
            </li>
        
          </ul>
        </nav>
   
      </div>
    </div>
  </aside>