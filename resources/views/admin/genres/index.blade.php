@extends('admin.layouts.layout1')

@section('content')
      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Quản lý thể loại</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Quản lý thể loại</li>
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
                @include('admin.genres.addNewGenre')
              </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>STT</th>
                  <th>Tên thể loại</th>
                  <th>Hình thể loại</th>
                  <th>Chủ đề</th>
                  <th>Hành động</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($genres as $index => $genre)
                <tr>
                    <td>{{$index + 1}}</td>
                    <td>{{$genre->TenTheLoai}}</td>
                    <td>
                        <img src="{{$genre->HinhTheLoai}}" height="80" width="80" />
                    </td>
                    <td>
                      {{$genre->TenChuDe ?? 'Không có'}}
                    </td>
                    <td>
                        <button class="btn btn-sm btn-danger"
                        onclick="javascript:(function() { 
                          var ask = window.confirm('Bạn có chắc rằng muốn xóa thể loại này không: {{$genre->TenTheLoai}}?');
                          if (ask) {
                            window.location.href = '{{route('deleteGenre' , ['id' => $genre->idTheLoai])}}';
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
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
    <script>
        $('.my-select').selectpicker();
    </script>
@endsection
