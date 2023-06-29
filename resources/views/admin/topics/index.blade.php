@extends('admin.layouts.layout1')

@section('content')
      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Quản lý chủ đề</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Quản lý chủ đề</li>
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
                @include('admin.topics.addNewTopic')
              </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>STT</th>
                  <th>Tên chủ đề</th>
                  <th>Hình chủ đề</th>
                  <th>Hành động</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($topics as $index => $topic)
                <tr>
                    <td>{{$index + 1}}</td>
                    <td>{{$topic->TenChuDe}}</td>
                    <td>
                        <img src="{{$topic->HinhChuDe}}" height="80" width="80"/>
                    </td>
                    <td>
                        <button class="btn btn-sm btn-danger"
                        onclick="javascript:(function() { 
                          var ask = window.confirm('Bạn có chắc rằng muốn xóa chủ đề này không: {{$topic->TenChuDe}}?');
                          if (ask) {
                            window.location.href = '{{route('deleteTopic' , ['id' => $topic->idChude])}}';
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
