@extends('adminlte::page')

@section('title', 'Tạo mới sản phẩm')

@section('content_header')
    <h1>Tạo mới sản phẩm</h1>
@stop

@section('content')
      <div class="row">
        <!-- form start -->
        <form role="form" action="{{ route('post-create-product') }}" method="POST" >
          @csrf
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Thông tin sản phẩm</h3>
            </div>
            <!-- /.box-header -->
            
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Tên sản phẩm</label>
                  <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Danh mục sản phẩm</label>
                    <select class="form-control" name="category_id">
                      {{ category($categories,0,'&nbsp&nbsp',0) }}
                    </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Ảnh đại diện</label>
                  <div class="row">
                    <div class="col-md-7">
                      <button  id="lfm" data-input="thumbnail" data-preview="holder" type="button" class="btn btn-success">Chọn từ thư viện</button>
                      <input required id="thumbnail" class="form-control" type="text" name="promo_photo" readonly>
                    </div>
                    <div class="col-md-5">
                     <img id="holder" style="max-height:100px;border: 2px dotted #ecf0f5">
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Tạo mới</button>
              </div>
           
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">SEO</h3>
            </div>
            <div class="box-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Meta Title</label>
                <input  name="meta_title" type="email" class="form-control">
              </div>
            <div class="form-group">
                <label>
                   <font style="vertical-align: inherit;">Meta Keyword</font>
                  </font>
               </label>
                <textarea  name="meta_keyword" class="form-control" rows="3" placeholder=""></textarea>
              </div>

            <div class="form-group">
                <label>
                   <font style="vertical-align: inherit;">Meta Description</font>
                  </font>
               </label>
                <textarea  name="meta_description" class="form-control" rows="3" placeholder=""></textarea>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <!-- Form Element sizes -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Thông tin chi tiết sản phẩm</h3>
            </div>
            <div class="box-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Mã sản phẩm</label>
                    <input type="text" class="form-control" name="code">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Thương hiệu</label>
                    <input type="text" class="form-control" name="brand">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Bảo hành</label>
                    <input type="number" class="form-control" name="bh">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Xuất xứ</label>
                    <input type="text" class="form-control" name="xx">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Mô tả ngắn</label>
                    <textarea name="short_description" class="form-control" rows="5" ></textarea>
                  </div>
                </div>
              </div>
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
      </div>
      <div class="col-md-12">
        <!-- Form Element sizes -->
        <div class="box box-success">
          <div class="box-header with-border">
            <h3 class="box-title">Hình ảnh sản phẩm</h3>
          </div>
          <div class="box-body">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                 <button data-wapper="holder-wapper" data-preview="holder-photo" id="more" type="button" class="btn btn-success">Chọn từ thư viện</button>
                </div>
                <div class="form-group" id="holder-wapper">
                     <img class="holder-photo" style="max-height:100px;">
                     <img class="holder-photo" style="max-height:100px;">
                     <img class="holder-photo" style="max-height:100px;">
                </div>
              </div>
            </div>
            
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
        <div class="col-md-12">
            <!-- Form Element sizes -->
            <div class="box box-success">
              <div class="box-header with-border">
                <h3 class="box-title">Mô tả sản phẩm</h3>
              </div>
              <div class="box-body">
                <div class="form-group">
                    <textarea id="edt" class="form-control" rows="10" name="description" ></textarea>
                  </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </form>
      </div>
@stop

@section('css')
<link rel="stylesheet" href="{{ asset('asset/tinymce/skins/lightgray/skin.min.css') }}">
@stop

@section('js')
<script src="{{ asset('asset/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('/vendor/laravel-filemanager/js/lfm.js') }}"></script>
<script>
  $(function() {
    $('#lfm').filemanager('images');
    $('#more').filemanagerV2('images');
  });
</script>

<script>
    tinymce.init({selector:'#edt',
    height: 500,
    language:'vi',
    plugins: [
    'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
    'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
    'table emoticons template paste help'
  ],
  image_description: true,
  relative_urls: false,
  toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
    'bullist numlist outdent indent | link image | print preview media fullpage | ' +
    'forecolor backcolor emoticons | help',
  menubar: 'favs file edit view insert format tools table help',
  file_browser_callback : function(field_name, url, type, win) {
        var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
        var y = 800;
        var cmsURL =  '/laravel-filemanager?field_name='+field_name;
        if (type == 'image') {
            cmsURL = cmsURL + "&type=Images";
          } else {
            cmsURL = cmsURL + "&type=Files";
          }

        tinyMCE.activeEditor.windowManager.open({
            file : cmsURL,
            title : 'Quản lý hình ảnh',
            width : x * 0.8,
            height : y * 0.8,
            resizable : "yes",
            close_previous : "no"
        });
    }
  });
</script>
@stop
