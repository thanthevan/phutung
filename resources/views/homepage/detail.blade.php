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
                        <a title="Giới thiệu" href="/gioi-thieu">Sản phẩm</a>
                    </li>
                    <li>
                        <a title="Giới thiệu" href="/gioi-thieu">Sản phẩm</a>
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
            <div class="col-lg-9 col-md-10  ">
                <div class="main-content-box">
                    <div class="top-detail" style="margin-left:0 !important">
                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 slide-detail">
                            <div class="picZoomer" style="text-align: center;">
                                <img class="s2b-big-img"
                                    src="data:image/jpeg;base64,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"
                                    alt="" width="330px" height="330px"> </div>
                            <ul class="piclist thumbnails-carousel clearfix">
                                <div class="center clearfix">
                                    <li class="active-thumbnail">
                                        <img class="s2b-small-img"
                                            src="https://shop2banh.vn/images/thumbs/2019/12/bao-tay-domino-chinh-hang-mau-moi-1075-slide-products-5de8de1977eae.jpg"
                                            alt="">
                                    </li>
                                </div>
                            </ul>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 right-detail">
                            <h1>Bao tay Domino (chính hãng) mẫu mới</h1>
                            <div class="external-pro-code">
                                <span>Mã SP:</span>
                                <div id="pro-code-detail" class="js-code">070479</div>
                            </div>
                            <div class="description-detail"> Bao tay Domino hàng chính hãng Italy với thiết kế mới, cao
                                su êm ái và nổi bật hơn bao tay nguyên bản. Thương hiệu Domino chuyên về bao tay thì đã
                                được rất nhiều khách hàng đánh giá cao về chất lượng. <br>Bao tay Domino gắn được cho
                                tất cả các loại xe. </div>
                            <div id="ct-show-more-wrp-2">
                                <div class="container"><span id="ct-show-more">Xem thêm</span></div>
                            </div>
                            <div class="info-detail">
                                <div class="price">
                                    <label>Giá:</label>
                                    <span>Liên hệ</span>
                                    <div class="status-detail"><i class="fa fa-check-circle"></i>Còn hàng</div>
                                </div>
                                <div class="quantity-detail">
                                    <div class="buy-btn">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> <button rel="1075"
                                                class="btn btn-danger btn-lg buy-btn-detail" id="addToCart">Liện Hệ Ngay
                                            </button> </div>
                                    </div>
                                </div>
                                <div class="ct-sp-hotline">
                                    <div class="whatsapp-icon"></div>
                                    <div class=""> <strong>Hỗ trợ mua hàng Online</strong><br> <span><a
                                                href="tel:+84938820202">0938.82.02.02</a> - <a
                                                href="tel:+84906644645">0906.644.645</a></span> </div>
                                </div>
                                <div class="clearFix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="clearFix"></div>
                    <div class="heart-banner-1" style="text-align:center; margin-top:30px; margin-bottom:20px;"></div>

                    <div class="main-content-box content-pages">
                        <!-- begin main-content-box 01 -->
                        <h3>Thông tin chi tiết</h3>
                        <a class="move-link"
                            href="https://shop2banh.vn/bao-tay-domino-chinh-hang-mau-moi-1075.html#comment-box">nhận
                            xét</a>
                        <div class="items-list-prod content-detail">
                            Bao tay Domino hàng chính hãng Italy với thiết kế mới, cao su êm ái và nổi bật hơn bao tay
                            nguyên bản. Thương hiệu Domino chuyên về bao tay thì đã được rất nhiều khách hàng đánh giá
                            cao về chất lượng.<br> Bao tay Domino chính hãng gắn được cho tất cả các loại xe.
                            <div style="text-align: center;"><br> <em>Bao tay Domino có rất nhiều màu cho khách hàng lựa
                                    chọn</em><br> <img
                                    src="https://shop2banh.vn/images/2019/12/20191205_d07ae1546d3d7092bab33e51909eb9ab_1575542324.jpg"
                                    alt="Bao tay domino chính hãng mẫu mới - 1"><br> <img
                                    src="https://shop2banh.vn/images/2019/12/20191205_1a9e523b6759fa0448ca1448842d9732_1575542324.jpg"
                                    alt="Bao tay domino chính hãng mẫu mới - 2"><br> <img
                                    src="https://shop2banh.vn/images/2019/12/20191205_ac3d78596311b32e76899e2fb2f125aa_1575542324.jpg"
                                    alt="Bao tay domino chính hãng mẫu mới - 3"><br> <img
                                    src="https://shop2banh.vn/images/2019/12/20191205_d9d3cd914bbe1fa0a8bc77776954b4bb_1575542324.jpg"
                                    alt="Bao tay domino chính hãng mẫu mới - 4"><br> <img
                                    src="https://shop2banh.vn/images/2019/12/20191205_fc8c68a1964895ded15df8d7c3510f19_1575542324.jpg"
                                    alt="Bao tay domino chính hãng mẫu mới - 5"><br> &nbsp;</div>
                            <div class="git-in-detail">
                                <button rel="1075" class="btn btn-danger btn-lg buy-btn-detail"
                                    id="addToCartInDetails">MUA NGAY</button>
                                <div class="get-in-touch">
                                    <div class="git-title">Để lại số điện thoại để được tư vấn</div>
                                    <div class="git-form"> <input type="number" value="" class="cusNumber"
                                            placeholder="Nhập số điện thoại"> <button>GỬI</button> </div>
                                </div>
                            </div>

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
                <div class="content-box home-products ct-scoll-fixed-block">
                    <h3>Sản phẩm liên quan</h3>
                    <div class="items-list-ctb">
                        <div class="items-ctb">
                            <div class="img-ctb">
                                <a href="https://shop2banh.vn/phuoc-rcb-vs-chinh-hang-cho-sirius-jupiter-ty-vang-1158.html"
                                    title="Phuộc RCB VS chính hãng cho Sirius, Jupiter (ty vàng)"><img
                                        src="https://shop2banh.vn/cache/images/thumbs/2020/03/115_115_phuoc-rcb-vs-chinh-hang-cho-sirius-jupiter-ty-vang-products-1158.jpg"
                                        alt="Phuộc RCB VS chính hãng cho Sirius, Jupiter (ty vàng)"></a>
                            </div>
                            <div class="title-ctb"> <a
                                    href="https://shop2banh.vn/phuoc-rcb-vs-chinh-hang-cho-sirius-jupiter-ty-vang-1158.html"
                                    title="Phuộc RCB VS chính hãng cho Sirius, Jupiter (ty vàng)">Phuộc RCB VS chính
                                    hãng cho Sirius, Jupiter (ty vàng)</a> </div>
                            <div class="price-ctb">3.800.000 đ</div>
                            <div class="clearFix"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('css')
<link rel="stylesheet" href="/asset/css/custom_2.css">
<style type="text/css">
    .ct-rl-item:after {
        content: '';
        display: block;
        clear: both;
    }

    .ct-rl-item {
        padding: 3px 6px;
        max-width: 170px;
        outline: none;
        cursor: pointer;
        margin: 0px 5px;
        display: inline-block;
    }

    .ct-rl-item-img {
        width: 100%;
        height: auto;
        padding: 5px;
        border-radius: 8px;
        outline: none;
    }

    .ct-rl-item a {
        outline: none;
    }

    .ct-rl-item-img img {
        width: 100%;
    }

    .ct-rl-item-info {
        padding: 10px;
        width: 100%;
    }

    .ct-rl-item-info a {
        font-size: 15px;
        display: block;
        overflow: hidden;
        height: 60px;
    }

    div#ct-pro-relate h3 {
        font-size: 18px;
        line-height: 24px;
        font-weight: 500;
        margin: 0px;
        margin-left: 8px;
        margin-bottom: 10px;
    }

    div#ct-pro-relate h3 span {
        border-bottom: 2px solid #008703;
        padding-bottom: 2px;
    }

    div#ct-pro-relate {
        margin-top: 25px;
        margin-bottom: 10px;
        width: calc(100% - 30px);
        padding: 5px;
    }

    .slick-prev:before,
    .slick-next:before {
        color: #008703;
    }

    .ct-rl-item .ct-rl-item-info a {
        white-space: normal;
    }

    .ct-m-main {
        border: 1px solid #ccc;
        grid-area: main;
        background: #f9f9f9;
        padding: 5px 10px;
    }

    .slick-next {
        right: -35px;
    }

    .slick-prev {
        left: -35px;
    }

    @media(max-width:1024px) {
        #ct-pro-relate-slide {
            overflow: auto;
        }

        #ct-pro-relate-slide {
            position: relative;
            width: 100%;
            overflow-x: scroll;
            overflow-y: hidden;
            white-space: nowrap;
            transition: all 0.2s;
            will-change: transform;
            user-select: none;
            cursor: pointer;
        }

        .ct-rl-item {
            width: 35vw;
            padding: 3px 6px;
            margin: 0px;
            vertical-align: top;
        }
    }

    @media(max-width:480px) {
        .ct-rl-item .ct-rl-item-img {
            float: none;
            width: 100%;
        }

        .ct-rl-item .ct-rl-item-info {
            float: none;
            width: 100%;
            padding-bottom: 0px;
            padding-top: 5px;
        }

        .ct-rl-item .ct-rl-item-info a {
            margin-bottom: 5px;
            font-size: 14px;
        }

        .ct-rl-item-price .price-new-prod {
            font-size: 14px !important;
        }

        div#ct-pro-relate {
            width: 100%;
            overflow: hidden;
        }

        .slick-next {
            right: 10px;
            top: -18px;
        }

        .slick-prev {
            right: 40px;
            left: auto;
            top: -18px;
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
<style type="text/css" media="screen">
    .heart-banner-1-mobile {
        display: none;
    }

    @media (max-width: 480px) {
        .heart-banner-1 {
            display: none
        }

        .heart-banner-1-mobile {
            display: block;
        }

        .heart-banner-1-mobile img {
            width: 100%;
        }
    }
</style>
@endsection
@section('js')
<script>
    $(document).ready(function() {
    $('#ct-store-list-btn div').on('click', function() {
        if ($('#ct-list-store-2').is(":visible")) {
            $('.dark-bg').hide();
            $('#ct-list-store-2').hide();
        }

        else {
            $('.dark-bg').show();
            $('#ct-list-store-2').show();
        }
    });

    $('#ct-store-list-btn-stickbar div').on('click', function() {
        if ($('#ct-list-store-3').is(":visible")) {
            $('.dark-bg').hide();
            $('#ct-list-store-3').hide();
        }

        else {
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
    });});

    $(document).mouseup(function(e) {
        var winw=$(window).width();
        var container2=$("#ct-list-store-2");
        var container3=$("#ct-list-store-3");
        var btnList=$(".ct-store-list-btn");

        if (winw > 991) {
            if ( !container2.is(e.target) && container2.has(e.target).length===0) {
                $('.dark-bg').hide();
                container2.hide();
            }

            if ( !container3.is(e.target) && container3.has(e.target).length===0) {
                $('.dark-bg').hide();
                container3.hide();
            }
        }
    });
</script>
<script>
    $(function () {
        $('.active-thumbnail').on('click', function() {
          var src  = $(this).children('img').attr('src');
            $('.s2b-big-img').attr('src',src);
        });
    });
</script>
@endsection