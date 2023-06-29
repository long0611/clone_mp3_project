@extends('admin.layouts.layout1')

@section('content')
      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Quản lý albums</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Quản lý albums</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">
                @include('admin.albums.addNewAlbum')
              </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>STT</th>
                  <th>Tên album</th>
                  <th>Tên ca sĩ album</th>
                  <th>Hình album</th>
                  <th>Hành động</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($albums as $index => $album)
                <tr>
                    <td>{{$index + 1}}</td>
                    <td>{{$album->TenAlbum}}</td>
                    <td>{{$album->TenCasiAlbum}}</td>
                    <td>
                        <img src="{{$album->HinhAlbum}}" height="80" width="80" />
                    </td>
                    <td>
                        <button class="btn btn-sm btn-danger"
                        onclick="javascript:(function() { 
                          var ask = window.confirm('Bạn có chắc rằng muốn xóa album này không: {{$album->TenAlbum}} , những bài hát thuộc album này cũng sẽ bị xóa, tiếp tục?');
                          if (ask) {
                            window.location.href = '{{route('deleteAlbum' , ['id' => $album->idAlbum])}}';
                          };
                        })()"
                        
                        ><i class="fas fa-trash"></i></button>
                    </td>  
                </tr>
                @endforeach

              </table>
            </div>
            <!-- /.card-body -->
          </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection

@section('extras')
    @include('admin.layouts.musicplayer')
@endsection
