@extends('admin.layouts.layout1')

@section('content')
      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Quản lý bài hát</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Quản lý bài hát</li>
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
                @include('admin.songs.addNewSong') 
              </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>STT</th>
                  <th>Tên bài hát</th>
                  <th>Hình bài hát</th>
                  <th>Ca sĩ</th>
                  <th>Nghe</th>
                  <th>Lượt thích</th>
                  <th>Album</th>
                  <th>Thể loại</th>
                  <th>Hành động</th>
                  192.168.75.239 --}}
                </tr>
                </thead>
                <tbody>
                @foreach ($songs as $index => $song)
                <tr>
                    <td>{{$index + 1}}</td>
                    <td>{{$song->TenBaiHat}}</td>
                    <td>
                        <img src="{{$song->HinhBaiHat}}" height="80" width="80"/>
                    </td>
                    <td>{{$song->Casi}}</td>
                    <td>   
                        <div class="audio-player" data-src="{{$song->LinkBaiHat}}"></div>
                    </td>
                    <td>{{$song->LuotThich}}</td>
                    <td>{{$song->TenAlbum ?? 'Không có'}}</td>
                    <td>{{$song->genre ?? 'Không có'}}</td>    
                    <td>
                        <button class="btn btn-sm btn-danger" onclick="javascript:(function() { 
                          var ask = window.confirm('Bạn có chắc rằng muốn xóa bài hát: {{$song->TenBaiHat}} được thể hiện bởi {{$song->Casi}}?');
                          if (ask) {
                            window.location.href = '{{route('deleteSong' , ['id' => $song->idBaiHat])}}';
                          };
                        })()"
                        ><i class="fas fa-trash"></i></button>
                    </td>  
                    {{-- <td><button class="btn btn-sm btn-danger" onclick="javascript:(function() { 
                      var ask = window.confirm('Bạn có chắc rằng muốn sua bài hát: {{$song->TenBaiHat}} được thể hiện bởi {{$song->Casi}}?');
                      if (ask) {
                        window.location.href = '{{route('updatesong' , ['id' => $song->idBaiHat])}}';
                      };
                    })()"
                    ><i class="fas fa-trash"></i></button></td> --}}
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

    <script src="/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="/adminlte/plugins/jszip/jszip.min.js"></script>
    <script src="/adminlte/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="/adminlte/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="/adminlte/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="/adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <script>
      $('.my-select').selectpicker();
      $('#example2').DataTable({
        "searching": true,
      });
    </script>
@endsection
