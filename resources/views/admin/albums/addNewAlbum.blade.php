<!-- Button trigger modal -->

<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
    Thêm album mới
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Thêm album mới</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" action="{{route("addAlbum")}}" enctype="multipart/form-data">
        <div class="modal-body">
            @csrf
            <label>Tên album</label>
            <input class="form-control" required name="TenAlbum"/>
            <br>
            <label>Tên ca sĩ album</label>
            <input class="form-control" required name="TenCasiAlbum"/>
            <br>
            <label>Hình album</label>
            <input class="form-control" type="file" required name="HinhAlbum" accept=".png,.jpg"/>
            <br>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Thêm album</button>
        </div>
        </form>
      </div>
    </div>
  </div>