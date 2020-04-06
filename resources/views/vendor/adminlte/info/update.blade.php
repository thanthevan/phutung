@extends('adminlte::page')

@section('title', 'Về chúng tôi')

@section('content_header')
    <h1>Về chúng tôi</h1>
@stop

@section('content')
      <div class="row">
        <!-- form start -->
        <form role="form" action="{{ route('update-info') }}" method="POST" >
          @csrf
        <input name="id" type="hidden" value="{{$info->id}}">
          <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">SEO</h3>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Meta Title</label>
                <input  value="{{$info->meta_title}}" name="meta_title" type="email" class="form-control">
                </div>
              <div class="form-group">
                  <label>
                     <font style="vertical-align: inherit;">Meta Keyword</font>
                    </font>
                 </label>
                  <textarea  name="meta_keyword" class="form-control" rows="3" placeholder="">{{$info->meta_keyword}}</textarea>
                </div>
  
              <div class="form-group">
                  <label>
                     <font style="vertical-align: inherit;">Meta Description</font>
                    </font>
                 </label>
                  <textarea  name="meta_description" class="form-control" rows="3" placeholder="">{{$info->meta_description}}</textarea>
                </div>
              </div>
            </div>
          </div>
        <div class="col-md-12">
            <!-- Form Element sizes -->
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Chi tiết trang</h3>
              </div>
              <div class="box-body">
                <div class="form-group">
                <textarea name="content" id="edt" class="form-control" rows="20" >{{$info->content}}</textarea>
                  </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Lưu</button>
              </div>
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
