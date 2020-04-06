@extends('adminlte::page')

@section('title', 'Danh sách sản phẩm')

@section('content_header')
    <h1>Danh sách địa chỉ</h1>
@stop

@section('content')
<div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Danh sách địa chỉ</h3>
              <div class="box-create-new" style="width:90px;float:right">
                  <a href="{{route('show-create-address')}}" class="btn-create btn btn-block btn-success">
                     <i class="fa fa-plus"></i> Tạo mới
                  </a>
              </div>
            </div>
            <!-- /.box-header -->

            <div class="box-body">

              <table class="table table-bordered">
                <tbody>
                  <tr>
                    <th style="width: 10px">ID</th>
                    <th>Tỉnh thành</th>
                    <th>Địa chỉ chi tiết</th>
                    <th>Thao tác</th>
                  </tr>
                 
                 @if(count($listAddress) != 0) 

                     @foreach($listAddress as $item )
                      <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->full}}</td>
                        <td style="width:80px">
                          <a href="{{route('show-address',['id' => $item->id])}}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                        </td>
                      </tr>
                      @endforeach

                  @else 
                   
                      <tr>
                        <td></td>
                        <td></td>
                        <td>Không có dữ liệu</td>
                        <td></td>
                      </tr>
                   
                  @endif
               

              </tbody>
            </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
            
            </div>
          </div>
          <!-- /.box -->
      </div>


@stop

@section('css')
<style>
  .pagination{
    float: right;
  }
</style>
@stop

@section('js')
  @if ($action === 1)
   @include('vendor.adminlte.config.modal_create_address')
    <script>
      $(function () {
        $('.btn-create').on('click', function() {
          $('#form-create').submit();
        });
        $('.close').on('click', function() {
          window.location.assign("{{ route('address') }}");
        });
        $('#modal-create-address').modal('show');   
      });
    </script>
    @endif
    @if ($action === 2)
   @include('vendor.adminlte.config.modal_update_address')
    <script>
      $(function () {
            $('.btn-update').on('click', function() {
              $('#form-update').submit();
            });
            $('.close').on('click', function() {
              window.location.assign("{{ route('address') }}");
            });
            $('#modal-update-address').modal('show');
            $('#lfm').filemanager('images');
      });
    </script>
    @endif
    
@stop
