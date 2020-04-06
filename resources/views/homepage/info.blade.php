@extends('homepage.master')
@section('seo')

@endsection
@section('content')

<section>

    <div class="container main-content ">
        <div class="breadcrumb_wpr">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 breadcrumb">
                <ol>
                    <li>
                        <a title="Phụ tùng xe máy" href="/">Phụ tùng ô tô</a>
                    </li>
                    <li>
                        <a title="Giới thiệu" href="/gioi-thieu">Giới thiệu</a>
                    </li>
                </ol>
            </div>
            <div class="clearFix"></div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-left-ct">
            <div class="col-lg-3 col-md-2 col-sm-12 col-sm-12 main-menu ">

                <div class="header-main-menu"><i class="fa fa-bars"></i>Danh mục sản phẩm</div>
                <ul class="main_menu_dropdown">
                    @if ($categories)
                    {{ showCategories($categories)}}
                    @endif
                </ul>
            </div>
            <div class="col-lg-12 col-md-12 content checkout-success contact-page">
                <div class="main-content-box news-detail">
                    <h1>Giới thiệu</h1>
                    <div class="news-detail-content">
                        @if ( $info )
                        @php
                        echo html_entity_decode($info->content,ENT_QUOTES);
                        @endphp
                        @endif
                    </div>
                </div>
            </div>

        </div>
</section>

@endsection

@section('css')
<link rel="stylesheet" href="/asset/css/custom_2.css">
@endsection
@section('js')

@endsection