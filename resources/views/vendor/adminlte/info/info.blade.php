@extends('adminlte::page')

@section('title', 'Về chúng tôi')

@section('content_header')
    <h1>Về chúng tôi</h1>
@stop

@section('content')
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Xem trước</h3>
            </div>
            <!-- /.box-header -->
            
              <div class="box-body">
                    @if ( $info )
                      @php
                          echo html_entity_decode($info->content,ENT_QUOTES);
                      @endphp
                    @endif
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="{{ route('edit-info') }}" 
                    class="btn btn-primary">
                    {{ empty($info) ?  "Tạo" : "Sửa" }}
                </a>
              </div>
           
          </div>
          <!-- /.box -->
        </div>
      </div>
@stop

@section('css')
@stop

@section('js')
@stop
