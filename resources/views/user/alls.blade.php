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
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
    flex-direction: row;
    overflow-x: auto;
 
 
  }
  .spotify-playlists .list .item {
    min-width: 140px;
    width: 160px;
    padding: 15px;
    background-color: #181818;
    border-radius: 6px;
    cursor: pointer;

    transition: all ease 0.4s;
  }
  .spotify-playlists .list .item:hover {
    background-color: #252525;
  }
  .spotify-playlists .list .item img {
    width: 100%;
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
  </style>
@endsection


@section('content')


<style>
  .alert {
    background: red;
    color: white;
    padding: 10px;
  }
</style>
@if(Session::get('success'))
<div class="alert alert-success">
    {{session::get('success')}}
</div>
@endif
    <div class="content">
        <div class="spotify-playlists">
            <h2>Chủ đề hot</h2>
            <div class="list">
              @foreach ($topics as $topic)
              <div class="item"
              onclick="javascript:(function() { 
                window.location.href='{{route('DetailTopic' , ['id' => $topic->idChude])}}'
              })()"
              
              
              >
                <img src="{{$topic->HinhChuDe}}" style="height: 130px; width:130px" />
                <div class="play">
                  <span class="fa fa-play"></span>
                </div>
                <h4>{{$topic->TenChuDe}}</h4>
              </div>
              @endforeach
            </div>
          </div>
    
          <div class="spotify-playlists">
            <h2>Playlist</h2>
            <div class="list">

              @foreach ($playlists as $playlist)
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
    
          <div class="spotify-playlists">
            <h2>Các thể loại</h2>
            <div class="list">
              @foreach ($genres as $genre)
              <div class="item" 
              onclick="javascript:(function() { 
                window.location.href='{{route('DetailCategory' , ['id' => $genre->idTheLoai])}}'
              })()"
               >
                <img src="{{$genre->HinhTheLoai}}"  style="height: 130px; width:130px"/>
                <div class="play">
                  <span class="fa fa-play"></span>
                </div>
                <h4>{{$genre->TenTheLoai}}</h4>
              </div>
              @endforeach

            </div>
    
            <hr>
          </div>
    
    </div>
@endsection