<div class="modal fade" id="modal-update-phone"  data-backdrop="static" >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close">
            <span aria-hidden="true">x</span></button>
          <h4 class="modal-title">chỉnh sửa số điện thoại</h4>
        </div>
        <div class="modal-body">
           <div class="box box-primary">
            <form id="form-update" role="form" action="{{ route('update-phone') }}" method="POST">
              @csrf
              <input type="hidden" name="id" value="{{$phone->id}}">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Tên chủ</label>
                  <input value="{{$phone->name}}"  required type="text" name="name" class="form-control" >
                </div>
                <div class="form-group">
                  <label>
                     <font style="vertical-align: inherit;">
                     <font style="vertical-align: inherit;">Số điện thoại</font>
                    </font>
                 </label>
                   <input value="{{$phone->phone}}" required type="text" name="phone" class="form-control" >
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="modal-footer">
          
          <button type="button" class="btn btn-success btn-update">Lưu</button>
        </div>
      </div>
    </div>
  </div>