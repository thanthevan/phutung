<div class="modal fade" id="modal-create-address"  data-backdrop="static" >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close">
            <span aria-hidden="true">x</span></button>
          <h4 class="modal-title">Tạo mới địa chỉ</h4>
        </div>
        <div class="modal-body">
           <div class="box box-primary">
            <form id="form-create" role="form" action="{{ route('create-address') }}" method="POST">
              @csrf

              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Tên tỉnh thành/thành phố</label>
                  <input  required type="text" name="name" class="form-control" >
                </div>
                <div class="form-group">
                  <label>
                     <font style="vertical-align: inherit;">
                     <font style="vertical-align: inherit;">Địa chỉ</font>
                    </font>
                 </label>
                  <textareathoại required name="full" class="form-control" rows="2" ></textarea>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="modal-footer">
          
          <button type="button" class="btn btn-success btn-create">Tạo mới</button>
        </div>
      </div>
    </div>
  </div>