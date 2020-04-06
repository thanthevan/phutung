<div class="modal fade" id="modal-create-category"  data-backdrop="static" >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close">
            <span aria-hidden="true">×</span></button>
          <h4 class="modal-title">Tạo mới danh mục sản phẩm</h4>
        </div>
        <div class="modal-body">
           <div class="box box-primary">
            <form id="form-create" role="form" action="{{ route('post-product-category-create') }}" method="POST">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Tên danh mục</label>
                  <input required type="text" name="name" class="form-control" >
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Danh mục sản phẩm</label>
                    <select class="form-control" name="parent_id">
                      <option value="0">* Danh mục gốc</option>
                      {{ category($categories,0,'&nbsp&nbsp',0) }}
                    </select>
                </div>
                <div class="form-group">
                  <label>Hình ảnh giới thiệu</label>
                  <br/>
                 <div class="row">
                   <div class="col-md-7">
                    <a style="color:green" id="lfm" data-input="thumbnail" data-preview="holder"  href="#">Lấy từ thư viện</a>
                    <input required id="thumbnail" class="form-control" type="text" name="promo_photo" readonly>
                   </div>
                   <div class="col-md-5">
                    <img id="holder" style="max-height:100px;">
                   </div>
                 </div>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Meta Title</label>
                  <input name="meta_title" type="text" class="form-control" >
                </div>
                <div class="form-group">
                  <label>
                     <font style="vertical-align: inherit;">
                     <font style="vertical-align: inherit;">Meta Keyword</font>
                    </font>
                 </label>
                  <textarea name="meta_keyword" class="form-control" rows="2" ></textarea>
                </div>
                <div class="form-group">
                  <label>
                     <font style="vertical-align: inherit;">
                     <font style="vertical-align: inherit;">Meta Description</font>
                    </font>
                 </label>
                  <textarea  name="meta_description" class="form-control" rows="2" ></textarea>
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