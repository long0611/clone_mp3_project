<!-- Button trigger modal -->

<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
    Thêm quảng cáo mới
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Thêm quảng cáo mới</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <script>
            function toSubmit(){
                var x = document.getElementById("selectedSong");
                document.getElementById("trackName").value = x.options[x.selectedIndex].text;
                if (x.value == 0) {
                    alert("Bạn phải chọn một bài nhạc để quảng cáo!!!");
                    return false;
                }
                return true;
            }
         </script>

        <form method="POST" action="{{route("addAd")}}" onsubmit="return toSubmit();" enctype="multipart/form-data">
        <div class="modal-body">
            @csrf
            <label>Hình ảnh</label>
            <input class="form-control" type="file" required name="hinhanh" accept=".png,.jpg"/>
            <br>
            <label>Nội dung</label>
            <input class="form-control" required name="noidung"/>
            <br>

            <input hidden id="trackName" name="TenBaiHat"/>

            <label>Bài hát</label>
            <div class="row">
                <select class="selectpicker form-control" data-live-search="true" style="width: 100%" name="idBaiHat" required id="selectedSong">
                    <option value="0">Chọn một bài nhạc để quảng cáo</option>
                    @foreach ($songEntities as $entity)
                    <option value="{{$entity->idBaiHat}}">{{$entity->TenBaiHat}}</option>
                    @endforeach
                </select>
            </div>
            <br>
            <label>Hình banner</label>
            <input class="form-control" type="file" required name="banner" accept=".png,.jpg"/>
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