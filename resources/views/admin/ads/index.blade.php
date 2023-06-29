@extends('admin.layouts.layout1')

@section('content')
      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Quản lý quảng cáo</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Quản lý quảng cáo</li>
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
                @include('admin.ads.addNewAd')
              </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>STT</th>
                  <th>Hình ảnh</th>
                  <th>Nội dung</th>
                  <th>Tên bài hát</th>
                  <th>Hình banner</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($ads as $index => $ad)
                <tr>
                    <td>{{$index + 1}}</td>
                    <td>
                        <img src="{{$ad->hinhanh}}" height="80" width="80" />
                    </td>
                    <td>{{$ad->noidung}}</td>
                    <td>{{$ad->TenBaiHat}}</td>
                    <td>
                        <img src="{{$ad->banner}}" height="80" width="80" />
                    </td>
                   
                    <td>
                        <button class="btn btn-sm btn-danger"
                        onclick="javascript:(function() { 
                          var ask = window.confirm('Bạn có chắc rằng muốn xóa quảng cáo này?');
                          if (ask) {
                            window.location.href = '{{route('deleteAd' , ['id' => $ad->id])}}';
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
