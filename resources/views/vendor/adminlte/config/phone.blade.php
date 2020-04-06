@extends('adminlte::page')

@section('title', 'Danh sách số điện thoại')

@section('content_header')
    <h1>Danh sách số điện thoại</h1>
@stop

@section('content')
<div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Danh sách số điện thoại</h3>
              <div class="box-create-new" style="width:90px;float:right">
                  <a href="{{route('show-create-phone')}}" class="btn btn-block btn-success">
                     <i class="fa fa-plus"></i> Tạo mới
                  </a>
              </div>
            </div>
            <!-- /.box-header -->

            <div class="box-body">

              <table class="table table-bordered">
                <tbody><tr>
                  <th style="width: 10px">ID</th>
                  <th>Tên</th>
                  <th>Số điện thoại</th>
                  <th>Thao tác</th>
                </tr>
                
                  @if(count($listPhone) != 0) 

                     @foreach($listPhone as $item )
                      <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->phone}}</td>
                        <td style="width:80px">
                          <a href="{{route('show-phone',['id' => $item->id])}}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
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
   @include('vendor.adminlte.config.modal_create_phone')
    <script>
      $(function () {
        $('.btn-create').on('click', function() {
          $('#form-create').submit();
        });
        $('.close').on('click', function() {
          window.location.assign("{{ route('phone') }}");
        });
        $('#modal-create-phone').modal('show');   
      });
    </script>
    @endif
    @if ($action === 2)
   @include('vendor.adminlte.config.modal_update_phone')
    <script>
      $(function () {
            $('.btn-update').on('click', function() {
              $('#form-update').submit();
            });
            $('.close').on('click', function() {
              window.location.assign("{{ route('phone') }}");
            });
            $('#modal-update-phone').modal('show');
      });
    </script>
    @endif
    
@stop
