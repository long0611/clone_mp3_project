<!-- Button trigger modal -->

<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
    Thêm thể loại mới
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Thêm thể loại mới</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" action="{{route("addGenre")}}" enctype="multipart/form-data">
        <div class="modal-body">
            @csrf
            <label>Tên thể loại</label>
            <input class="form-control" required name="TenTheLoai"/>
            <label>Hình Thể Loại</label>
            <input class="form-control" type="file" required name="HinhTheLoai" accept=".png,.jpg"/>
            <br>
            <label>Chủ đề</label>
            <div class="row">
                <select class="selectpicker form-control" data-live-search="true" style="width: 100%" name="idChude">
                    <option value="0">Không có</option>
                    @foreach ($topicEntities as $entity)
                    <option value="{{$entity->idChude}}">{{$entity->TenChuDe}}</option>
                    @endforeach
                </select>
            </div>
            <br>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Thêm thể loại</button>
        </div>
        </form>
      </div>
    </div>
  </div>