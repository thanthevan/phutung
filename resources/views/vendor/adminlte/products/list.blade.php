@extends('adminlte::page')

@section('title', 'Danh sách sản phẩm')

@section('content_header')
    <h1>Danh sách sản phẩm</h1>
@stop

@section('content')
<div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Danh sách</h3>
              <div class="box-create-new" style="width:90px;float:right">
                  <a href="{{route('create-product')}}" class="btn btn-block btn-success">
                     <i class="fa fa-plus"></i> Tạo mới
                  </a>
              </div>
            </div>
            <!-- /.box-header -->

            <div class="box-body">

              <table class="table table-bordered">
                <tbody><tr>
                  <th style="width: 10px">ID</th>
                  <th>Tên sản phẩm</th>
                  <th>Ảnh đại diện</th>
                  <th>Ngày tạo</th>
                  <th>Thao tác</th>
                </tr>
                
                  @if ($list)
                  @foreach ($list as $item)
                  <tr>
                  <td>{{ $item->id }}</td>
                  <td>{{ $item->name }}</td>
                  
                  <td>
                  <img src="{{$item->promo_photo}}" width="50" height="50">
                  </td>
                  <td>{{ $item->created_at }}</td>
                  <td style="width:80px">
                    <a href="" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                  </td>
                  </tr>
                  @endforeach
                  
                  @else
                  Không có sản phẩm nào
                  @endif
               

              </tbody>
            </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              @if ($list)
              {{ $list->links() }} 
              @endif
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

@stop
