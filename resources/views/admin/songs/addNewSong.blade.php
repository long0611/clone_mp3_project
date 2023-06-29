<!-- Button trigger modal -->

<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
    Thêm bài hát mới
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Thêm bài hát mới</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" action="{{route("addSong")}}" enctype="multipart/form-data">
        <div class="modal-body">
            @csrf
            <label>Tên bài hát</label>
            <input class="form-control" required name="TenBaiHat"/>
            <label>Ca sĩ</label>
            <input class="form-control" required name="Casi"/>  
            <label>Hình bài hát</label>
            <input class="form-control" type="file" required name="HinhBaiHat" accept=".png,.jpg"/>
            <br>
            <label>File nhạc</label>
            <input class="form-control" type="file" required name="LinkBaiHat" accept=".mp3,.wav"/>
            <br>
            <label>Album</label>
            <div class="row">
                <select class="selectpicker form-control" data-live-search="true" style="width: 100%" name="idAlbum">
                    <option value="0">Không có</option>
                    @foreach ($albumEntities as $entity)
                    <option value="{{$entity->idAlbum}}">{{$entity->TenAlbum}}</option>
                    @endforeach
           
         
                </select>
            </div>
            <br>
            <label>Thể loại</label>
            <div class="row">
                <select class="selectpicker form-control" data-live-search="true" multiple style="width: 100%" name="idTheLoai[]">
                    @foreach ($genreEntities as $entity)
                    <option value="{{$entity->idTheLoai}}">{{$entity->TenTheLoai}}</option>
                    @endforeach

                </select>
            </div>
            <br>
            <label>Playlist</label>
            <div class="row">
                <select class="selectpicker form-control" data-live-search="true" multiple style="width: 100%" name="idPayList[]">
                    @foreach ($playlistEntities as $entity)
                    <option value="{{$entity->idPayList}}">{{$entity->Ten}}</option>
                    @endforeach

                </select>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Thêm bài hát</button>
        </div>
        </form>
      </div>
    </div>
  </div>