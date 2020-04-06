@extends('adminlte::page')

@section('title', 'Danh sách sản phẩm')

@section('content_header')
    <h1>Danh mục sản phẩm</h1>
@stop

@section('content')
<div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Danh sách</h3>
              <div class="box-create-new" style="width:90px;float:right">
                  <a href="{{ route('product-category-create') }}" class="btn btn-block btn-success btn-create">
                     <i class="fa fa-plus"></i> Tạo mới
                  </a>
              </div>
            </div>
            <!-- /.box-header -->

            <div class="box-body">

              <table class="table table-bordered">
                <tbody>
                  <tr style="background-color: #3c8dbc;color:#fff">
                  <th>Tên sản phẩm</th>
                  <th>Ảnh đại diện</th>
                  <th>Ngày tạo</th>
                  <th style="width:100px">Thao tác</th>
                </tr>
                {{ listCategory($categories) }}

              </tbody>
            </table>
            </div>
          </div>
          <!-- /.box -->
      </div>
@stop

@section('css')

@stop

@section('js')
    @if ($action === 1)
    <script src="{{ asset('/vendor/laravel-filemanager/js/lfm.js') }}"></script>
    @include('vendor.adminlte.product_category.modal_create')
    <script>
      $(function () {
        $('.btn-create').on('click', function() {
          $('#form-create').submit();
        });
        $('.close').on('click', function() {
          window.location.assign("{{ route('product-category') }}");
        });
        $('#modal-create-category').modal('show');
        $('#lfm').filemanager();    
      });
    </script>
    @endif
    @if ($action === 2)
    <script src="{{ asset('/vendor/laravel-filemanager/js/lfm.js') }}"></script>
    @include('vendor.adminlte.product_category.modal_edit')
    <script>
      $(function () {
            $('.btn-update').on('click', function() {
              $('#form-update').submit();
            });
            $('.close').on('click', function() {
              window.location.assign("{{ route('product-category') }}");
            });
            $('#modal-edit-category').modal('show');
            $('#lfm').filemanager('images');
      });
    </script>
    @endif
    @if ($action === 3)
    <script>
      $(function () {
         
          $('.ud').on('click',function () {
              var id = $(this).data('id');
              window.location.assign("category/edit/"+id);
          })
      });
    </script>
    @endif
   
@stop
