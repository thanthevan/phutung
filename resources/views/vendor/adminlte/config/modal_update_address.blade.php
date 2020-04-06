<div class="modal fade" id="modal-update-address"  data-backdrop="static" >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close">
            <span aria-hidden="true">x</span></button>
          <h4 class="modal-title">Cập nhật địa chỉ</h4>
        </div>
        <div class="modal-body">
           <div class="box box-primary">
            <form id="form-update" role="form" action="{{ route('update-address') }}" method="POST">
              @csrf
               <input type="hidden" name="id" value="{{$address->id}}">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Tên tỉnh thành/thành phố</label>
                  <input value="{{$address->name}}" required type="text" name="name" class="form-control" >
                </div>
                <div class="form-group">
                  <label>
                     <font style="vertical-align: inherit;">
                     <font style="vertical-align: inherit;">Địa chỉ</font>
                    </font>
                 </label>
                  <textarea required name="full" class="form-control" rows="2" >{{$address->full}}</textarea>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="modal-footer">
          
          <button type="button" class="btn-update btn btn-success btn-create">Lưu</button>
        </div>
      </div>
    </div>
  </div>