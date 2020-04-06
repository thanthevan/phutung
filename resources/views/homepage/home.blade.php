@extends('homepage.master')
@section('seo')
@seoTags()
@endsection
@section('menu_header')

@endsection
@section('content')
<section>
    <!-- begin main content -->
    <div class="swiper-container" id="ct-slider-mobile" style="height:200px">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="" rel="nofollow" target="_blank" title="xe may nhap khau"> <img
                        src="https://shop2banh.vn/images/29022020-675x370.gif" alt="xe nhap"> </a>
            </div>
            <div class="swiper-slide">
                <a href="" rel="nofollow" target="_blank" title="xe may nhap khau"> <img
                        src="https://shop2banh.vn/images/25022020-675x370.jpg" alt="xe nhap"> </a>
            </div>
            <div class="swiper-slide">
                <a href=""> <img src="https://shop2banh.vn/images/13120-675x370.jpg" alt="tet"> </a>
            </div>
            <div class="swiper-slide">
                <a href=""> <img src="https://shop2banh.vn/images/812020-675x370.jpg" alt="vo xe"> </a>
            </div>
            <div class="swiper-slide">
                <a href=""> <img src="https://shop2banh.vn/images/23819-675x370.jpg" alt="goracing"> </a>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
    <div class="ct-home-featured-menu">
        <div class="ct-home-featured-menu-grp">
            @if ($categories)
            @foreach ($categories as $item)
            @if ($item['parent_id'] == 0)
            <div class="ct-featured-menu-item">
                <a href="{{route('category', ['slug' =>  $item['slug']])}}" title="{{$item['name']}}">
                     <img style="border-radius:50%" src="{{$item['promo_photo']}}" alt="{{$item['name']}}">
                    <div>{{$item['name']}}</div>
                </a>
            </div>
            @endif
            @endforeach
            @endif
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="container main-content">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-left-ct" style="border: 1px solid #eae1e178;">
            {{-- danh muc  --}}
            <div class="col-lg-3 col-md-3 col-sm-12 col-sm-12 main-menu ">

                <div class="header-main-menu"><i class="fa fa-bars"></i>Danh mục sản phẩm</div>
                <ul class="main_menu_dropdown">
                    @if ($categories)
                    {{ showCategories($categories)}}
                    @endif

                </ul>
            </div>
            {{-- so dien thoai  --}}
            <div class="col-lg-6 col-md-5 col-sm-12 col-xs-12 main-slider">
                <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="10000">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                        <li data-target="#myCarousel" data-slide-to="4"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <a href="https://xenhap2banh.vn/tin-tuc/mua-xe-tra-gop-nhan-ngay-ca-vet-goc-17/"
                                rel="nofollow" target="_blank" title="xe may nhap khau"> <img
                                    src="http://phutungxehowo.com.vn/public/page/assets/slide-img258ba.jpg"
                                    alt="xe nhap"> </a>
                        </div>
                        <div class="item">
                            <a href="https://xenhap2banh.vn/tin-tuc/tra-truoc-vario-125-150-lai-suat-cuc-thap-16/"
                                rel="nofollow" target="_blank" title="xe may nhap khau"> <img
                                    src="https://shop2banh.vn/images/25022020-675x370.jpg" alt="xe nhap"> </a>
                        </div>
                        <div class="item">
                            <a href="https://shop2banh.vn/tu-van/bao-duong-xe-may-dip-tet-can-lam-nhung-gi-127.html">
                                <img src="https://shop2banh.vn/images/13120-675x370.jpg" alt="tet"> </a>
                        </div>
                        <div class="item">
                            <a href="https://shop2banh.vn/vo-xe-lop-xe.html"> <img
                                    src="https://shop2banh.vn/images/812020-675x370.jpg" alt="vo xe"> </a>
                        </div>
                        <div class="item">
                            <a href="https://shop2banh.vn/goracing.html"> <img
                                    src="https://shop2banh.vn/images/23819-675x370.jpg" alt="goracing"> </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 col-right-ct">
                <div class="suport-box">
                    <div class="info-title" style="padding: 5px 15px;">
                        Phụ tùng ô tô các loại
                        <small>Giờ làm việc: Từ 8g00 - 18g00
                            <span>(Cả Thứ 7 &amp; CN)</span>
                        </small></div>

                    <div class="ct-info-address">
                        @if(count($listAddress) != 0)
                        @foreach($listAddress as $address)
                        <div class="info" style="white-space: nowrap;">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <strong>{{$address->name}}:</strong>
                            {{$address->full}}
                        </div>
                        @endforeach
                        @endif

                    </div>
                    @if(count($listPhone) != 0)
                    @foreach($listPhone as $phone)
                    <div class="sp-online-block">

                        <div class="info maps-link"> <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                            {{$phone->name}}:</div>
                        <div class="hotline"><span class="">{{$phone->phone}}</span>
                            <div class="clearFix"></div>
                        </div>
                    </div>
                    @endforeach
                    @endif

                </div>

            </div>

        </div>


        <div class="col-lg-12 col-md-12">
            <div class="brand_list">
                <div class="well">
                    <div id="brandlist" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row-fluid">
                                    <div class="span3">
                                        <a href="" title="Phù tùng xe ô tô" class="thumbnail"><img
                                                src="/photos/1/doitac/5e75ddc077ce9.png" alt="Phù tùng xe ô tô" /></a>
                                    </div>
                                    <div class="span3">
                                        <a href="" title="Phù tùng xe ô tô" class="thumbnail"><img
                                                src="/photos/1/doitac/5e760691173f0.png" alt="Phù tùng xe ô tô" /></a>
                                    </div>
                                    <div class="span3">
                                        <a href="" title="Phù tùng xe ô tô" class="thumbnail"><img
                                                src="/photos/1/doitac/5e760690ebc9c.png" alt="Phù tùng xe ô tô" /></a>
                                    </div>
                                    <div class="span3">
                                        <a href="" title="Phù tùng xe ô tô" class="thumbnail"><img
                                                src="/photos/1/doitac/5e760691173f0.png" alt="Phù tùng xe ô tô" /></a>
                                    </div>
                                    <div class="span3">
                                        <a href="" title="Phù tùng xe ô tô" class="thumbnail"><img
                                                src="/photos/1/doitac/5e75ddc077ce9.png" alt="Phù tùng xe ô tô" /></a>
                                    </div>

                                </div>
                            </div>
                            <div class="item ">
                                <div class="row-fluid">
                                    <div class="span3">
                                        <a href="" title="Phù tùng xe ô tô" class="thumbnail"><img
                                                src="/photos/1/doitac/5e75ddc077ce9.png" alt="Phù tùng xe ô tô" /></a>
                                    </div>
                                    <div class="span3">
                                        <a href="" title="Phù tùng xe ô tô" class="thumbnail"><img
                                                src="/photos/1/doitac/5e760691173f0.png" alt="Phù tùng xe ô tô" /></a>
                                    </div>
                                    <div class="span3">
                                        <a href="" title="Phù tùng xe ô tô" class="thumbnail"><img
                                                src="/photos/1/doitac/5e760690ebc9c.png" alt="Phù tùng xe ô tô" /></a>
                                    </div>
                                    <div class="span3">
                                        <a href="" title="Phù tùng xe ô tô" class="thumbnail"><img
                                                src="/photos/1/doitac/5e760691173f0.png" alt="Phù tùng xe ô tô" /></a>
                                    </div>
                                    <div class="span3">
                                        <a href="" title="Phù tùng xe ô tô" class="thumbnail"><img
                                                src="/photos/1/doitac/5e75ddc077ce9.png" alt="Phù tùng xe ô tô" /></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <a class="left carousel-control" href="#brandlist" role="button" data-slide="prev"> <span
                                class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> </a>
                        <a class="right carousel-control" href="#brandlist" role="button" data-slide="next"> <span
                                class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> </a>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-lg-12 col-md-12">
            <!-- end brand_list -->
            <div class="main-content-box">
                <h2>Phụ tùng thân vỏ</h2>
                <div class="items-list-prod">
                    <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 items ripple">
                        <div class="img-prod">
                            <a href="" title=""><img
                                    src="https://shop2banh.vn/images/thumbs/2020/03/bao-tay-daytona-arc-1-chinh-hang-products-1140.jpg"
                                    alt="" /></a>
                        </div>
                        <div class="title-prod aaccc"><a href="" title="">Bao tay Daytona Arc-1 (chính hãng)</a></div>
                        <div class="price-prod">
                            <div class="price-new-prod">Giá liên hệ</div>
                            <div class="clearFix"></div>
                        </div>
                    </div>

                    <div class="view_all"> <a class="view_all_link" href="https://shop2banh.vn/do-choi-xe-may.html"
                            title="Đồ chơi xe máy"> Xem tất cả <i class="fa fa-caret-right"></i> </a> </div>
                </div>
            </div>
            <div class="main-content-box">
                <h2>Video</h2>
                <div class="clearfix"></div>
                <div class="shop-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Fr6fjxWFhso" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>

        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 home-video"
            style="text-align: center; padding:0px;padding-right:30px; margin-top: 30px;">

        </div>
    </div>
</section>
@endsection

@section('css')

<style type="text/css">
    .home-video h2 {
        font-size: 17px;
        text-transform: uppercase;
        font-weight: normal;
        line-height: 24px;
        background: #186090;
        float: left;
        color: #fff;
        padding: 5px 15px;
    }

    .home-video h2 {
        margin-top: 0px;
    }

    .shop-video {
        position: relative;
        padding-bottom: 56.25%;
        padding-top: 25px;
        height: 0;
        margin-bottom: 30px;
    }

    .shop-video iframe {
        margin: 15px 0px;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    @media(max-width:480px) {
        .home-video {
            padding: 0px 10px !important;
        }
    }
</style>
<style type="text/css">
    @media (min-width: 320px) {
        .suport-box .info {
            padding: 2px 4px 1px 4px;
        }

        .suport-box .info-title small {
            font-size: 12px;
            display: block;
            line-height: 10px;
            font-weight: normal;
            text-transform: none;
        }

        .info span {
            line-height: 18px;
        }

        .sp-online-block {
            display: flex;
        }

        .sp-online-block .hotline {
            padding: 0px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .sp-online-block .hotline span {
            font-size: 12px;
            padding: 0px;
        }
    }
</style>
@endsection
@section('js')
<script type="text/javascript">
    $(document).ready(function() {
        $('#ct-store-list-btn div').on('click', function() {
            if ($('#ct-list-store-2').is(":visible")) {
                $('.dark-bg').hide();
                $('#ct-list-store-2').hide();
            } else {
                $('.dark-bg').show();
                $('#ct-list-store-2').show();
            }
        });
        $('#ct-store-list-btn-stickbar div').on('click', function() {
            if ($('#ct-list-store-3').is(":visible")) {
                $('.dark-bg').hide();
                $('#ct-list-store-3').hide();
            } else {
                $('.dark-bg').show();
                $('#ct-list-store-3').show();
            }
        });
        $(window).on('scroll', function() {
            if ($('#ct-list-store-2').is(":visible")) {
                $('.dark-bg').hide();
                $('#ct-list-store-2').hide();
            }
            if ($('#ct-list-store-3').is(":visible")) {
                $('.dark-bg').hide();
                $('#ct-list-store-3').hide();
            }
            if ($('.main_menu_dropdown_fixed').is(":visible")) {
                $('.main_menu_dropdown_fixed').hide();
            }
        });
    });
    $(document).mouseup(function(e) {
        var winw = $(window).width();
        var container2 = $("#ct-list-store-2");
        var container3 = $("#ct-list-store-3");
        var btnList = $(".ct-store-list-btn");
        if (winw > 991) {
            if (!container2.is(e.target) && container2.has(e.target).length === 0) {
                $('.dark-bg').hide();
                container2.hide();
            }
            if (!container3.is(e.target) && container3.has(e.target).length === 0) {
                $('.dark-bg').hide();
                container3.hide();
            }
        }
    });
</script>
@endsection